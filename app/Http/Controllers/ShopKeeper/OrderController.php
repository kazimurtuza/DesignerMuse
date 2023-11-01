<?php

namespace App\Http\Controllers\ShopKeeper;

use App\Http\Controllers\Controller;
use App\Models\AdminSetting;
use App\Models\Designer;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Payment;
use App\Models\Shopkeeper;
use App\Models\ShopOrder;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cart;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Array_;

class OrderController extends Controller
{
    public function Order(Request $request)
    {
        $allOrderList = Cart::content();
//      $total= Cart::total();
        $totalShippingCost = 0;
        foreach ($allOrderList as $orderListItem) {
            $totalShippingCost += $orderListItem->qty * $orderListItem->options->shipping_cost;
        }
//        DB::beginTransaction();
//        try {
        $subtotalString = str_replace(',', '', Cart::subtotal());
        $subTotal = (float)$subtotalString;
        $payable = $totalShippingCost + $subTotal;

        $customerId = Auth::user()->id;
        $charge = AdminSetting::first();
        $chargeRatePrc = 0;
        $totalChargeForAllShop = 0;
        if ($charge) {
            $chargeRatePrc = $charge->product_charge_rate;
        }
//        service charge

        $companyList = [];

        $order = new Order();
        $order->customer_id = $customerId;
        $order->total_price = $payable;
        $order->invoice_id = strtotime(Carbon::now());
        $order->shipping_price = $totalShippingCost;
        $order->total_discount = 0;
        $order->total_payable = $payable;
        $order->pay_by = 1;
        $order->card = '';
        $order->trn_id = '';
        $order->card_last_digits = '';
        $order->address = $request->address;
        $order->city = $request->city;
        $order->zip_code = $request->zip_code;
        $order->state = $request->state;
        $order->payment_status = 0;
        $order->date = Carbon::now();
        $order->save();
        $order->invoice_id = 10000 + $order->id;
        $order->save();

        foreach ($allOrderList as $orderList) {
            $value = $orderList->options->shop_id;
            if (!in_array($value, $companyList, true)) {
                array_push($companyList, $value);
                $orderShop = new ShopOrder();
                $orderShop->shop_id = $value;
                $orderShop->order_id = $order->id;
                $orderShop->invoice_id = $order->invoice_id;
                $orderShop->status = 0;
                $orderShop->data = date('d-m-y');
                $orderShop->save();
                foreach ($allOrderList as $orderListItem) {
                    $shop_id_data = $orderListItem->options->shop_id;
                    if ($value == $shop_id_data) {
                        $shippingCostPrc = $orderListItem->qty * $orderListItem->options->shipping_cost;
                        $subtotalPrc = $orderListItem->qty * $orderListItem->price;
                        $payablePrc = $subtotalPrc + $shippingCostPrc;
                        $variantId = $orderListItem->options->variant_id;

//                        serviceCharge

                        $shopInfo = Shopkeeper::find($shop_id_data);
                        if (!$shopInfo->product_charge_rate == null) {
                            $chargeRatePrc = $shopInfo->product_charge_rate;
                        }
                        $service_charge = ($payablePrc * $chargeRatePrc) / 100;
                        $totalChargeForAllShop += $service_charge;

//                        serviceCharge

                        $orderDetails = new OrderDetails();
                        $orderDetails->order_id = $order->id;
                        $orderDetails->shop_order_id = $orderShop->id;
                        $orderDetails->shop_id = $value;
                        $orderDetails->product_id = $orderListItem->id;
                        $orderDetails->unit_price = $orderListItem->price;
                        $orderDetails->unit_cost = 0;
                        $orderDetails->total_payable = $payablePrc;
                        $orderDetails->service_charge = $service_charge;
                        $orderDetails->shipping_price = $shippingCostPrc;
                        $orderDetails->quantity = $orderListItem->qty;
                        $orderDetails->discount = 0;
                        $orderDetails->color_variant_id = $variantId;
                        $orderDetails->save();
                    }
                }
            }
        }

        $service_charge = 0;
        $userId = Auth::user()->id;
        $payment = new Payment();
        $payment->sector_type = 1;  /*0=designer 1=shop*/
        $payment->payment_for = 0;   /* 0=shop 1=meeting 2=project*/
        $payment->user_id = $userId;
        $payment->shop_order_id = $order->id;
        $payment->total_amount = $payable;
        $payment->service_charge_amount = $totalChargeForAllShop;
        $payment->date = Carbon::now();
        $payment->save();
        $paymentId=$payment->id;
        $paymentNo = $paymentId + 10000;
        $payment->id_no = $paymentNo;
        $payment->save();

        $request_data = array(
            'merchant_id' => '1201',
            'username' => 'test',
            'password' => stripslashes('test'),
            'api_key' => 'jtest123', // in sandbox request - password_hash('API_KEY',PASSWORD_BCRYPT), //In production, pass API_KEY with BCRYPT function
            'order_id' => $paymentId,
            'CurrencyCode' => 'KWD',
            'total_price' => $payable,
            'CstFName' => "Support",
            'CstEmail' => "support@upayments.com",
            'CstMobile' => "123456789",
            'success_url' =>baseUrl().'/designer/payment/success?type=shop',
            'error_url' =>baseUrl().'/designer/payment/success?type=shop',
            'notifyURL' =>baseUrl().'/designer/payment/success?type=shop',
            'test_mode' => 1,//Make it 0 if you use production API
        );

        $fields_string = http_build_query($request_data);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_URL, "https://api.upayments.com/test-payment");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec($ch);
        curl_close($ch);
        $server_output = json_decode($server_output, true);
        if ($server_output['status'] == 'success' && !empty($server_output['paymentURL'])) {
            header('Location: ' . $server_output['paymentURL']);
        } else {
            echo "<pre>";
            print_r($server_output);
        }
        exit();
//        }
//        catch (\Exception $e) {
//            DB::rollBack();
//            return $e->getMessage();
//        }

    }

    public function shopkeeperPendingOrder()
    {
        $common_data = new Array_();
        $common_data->title =languageGet()=='en'?'Pending Order':'طلب معلق';
        $shopId = Auth::guard('shopkeeper')->user()->id;
        $orderList = ShopOrder::where('shop_id', $shopId)->where('status', 0)->get();
        return view('shopkeeper.orderList.pendingOrderList')->with(compact('orderList','common_data'));

    }

    public function shopkeeperCompletedOrder()
    {
        $shopId = Auth::guard('shopkeeper')->user()->id;
        $orderList = ShopOrder::where('shop_id', $shopId)->where('status', 2)->get();
        return view('shopkeeper.orderList.completedOrderList')->with(compact('orderList'));

    }

    public function shopkeeperProcessingOrder()
    {
        $shopId = Auth::guard('shopkeeper')->user()->id;
        $orderList = ShopOrder::where('shop_id', $shopId)->where('status', 1)->get();
        return view('shopkeeper.orderList.processingOrderList')->with(compact('orderList'));

    }

    public function orderStatusUpdate(Request $request)
    {
        ShopOrder::where('id', $request->order_id)->update(['status' => $request->status]);
        $msg = languageGet() == 'en' ? 'successfully Order status updated' : 'تم تحديث حالة الطلب بنجاح';
        return redirect()->back()->with('success', $msg);
    }

    public function getOrderDetails(Request $request)
    {

        $orderList = ShopOrder::find($request->order_id);

        return view('shopkeeper.orderList._order_details')->with(compact('orderList'));

    }


}
