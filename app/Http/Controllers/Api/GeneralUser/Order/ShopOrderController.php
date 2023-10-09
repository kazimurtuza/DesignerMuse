<?php

namespace App\Http\Controllers\Api\GeneralUser\Order;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Mail\OrderCompleteMail;
use App\Models\AdminSetting;
use App\Models\Notification;
use App\Models\NotificationDeviceToken;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Payment;
use App\Models\Shopkeeper;
use App\Models\ShopOrder;
use App\Models\ShopProduct;
use App\Models\ShopProductRatingReview;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ShopOrderController extends Controller
{


    public function orderList(Request $request)
    {
        $userId = auth()->user()->id;
        return Order::where('customer_id', $userId)->orderBy('id', 'desc')->paginate(10);
    }

    public function orderDetails(Request $request)
    {

        return new OrderResource(Order::with('orderDetails')->find($request->order_id));

//        orderDetails
//        return OrderDetails::where('order_id', $request->order_id)->with('productInfo')->get();
    }


    public function order(Request $request)
    {

        $merchant_id = env('merchant_id');
        $username = env('username');
        $password = env('password');
        $api_key = env('api_key');
        $test_mode = env('test_mode');


        $allOrderList = (object)$request->orderList;
        $totalShippingCost = 0;
        $subTotal = 0;

        foreach ($allOrderList as $orderListItem) {
            $orderListItem = (object)$orderListItem;
            $totalShippingCost += $orderListItem->qty * $orderListItem->shipping_cost;
            $subTotal += $orderListItem->qty * $orderListItem->price;
        }
        $payable = $totalShippingCost + $subTotal;

        $customerId = auth()->user()->id;

//        service charge
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
        $order->pay_by = 0;
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
            $orderList = (object)$orderList;
            $value = $orderList->shop_id;
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
                    $orderListItem = (object)$orderListItem;
                    $shop_id_data = $orderListItem->shop_id;
                    if ($value == $shop_id_data) {
                        $shippingCostPrc = $orderListItem->qty * $orderListItem->shipping_cost;
                        $subtotalPrc = $orderListItem->qty * $orderListItem->price;
                        $payablePrc = $subtotalPrc + $shippingCostPrc;
                        $variantId = $orderListItem->variant_id;

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
        $paymentNo = $payment->id + 10000;
        $payment->id_no = $paymentNo;
        $payment->save();

        if ($payment) {
            $data = [
                'status' => 200,
                'message' => "successfully order saved but payment uncompleted",
                'order_id' => $payment->id,
            ];
            return response()->json($data,200);
        } else {
            $data = [
                'status' => 200,
                'order_id' => $payment->id,
                'message' => "successfully order saved but payment uncompleted",
            ];
            return response()->json($data,400);
        }


    }

    public function orderPaymentSuccess(Request $request)
    {
        if ($request->result == 'CAPTURED') {
            $paymentId = $request->orderID;
            $paymentInfo = Payment::find($paymentId);
            $paymentInfo->trn_id = $request->tranID;
            $paymentInfo->payment_id = $request->paymentID;
            $paymentInfo->result = $request->result;
            $paymentInfo->post_date = $request->postDate;
            $paymentInfo->ref = $request->ref;
            $paymentInfo->track_id = $request->trackID;
            $paymentInfo->order_id = $request->orderID;
            $paymentInfo->cust_ref = $request->cust_ref;
            $paymentInfo->trn_udf = $request->trnUdf;
            $paymentInfo->payment_status = 1;
            $paymentInfo->save();
            $orderId=$paymentInfo->shop_order_id;

            $shoporder = Order::find($orderId);
            $shoporder->payment_status = 1;
            $shoporder->payment_id = $paymentInfo->id;
            $shoporder->save();

            ShopOrder::where('order_id',$orderId)->update(['payment_status'=>1]);
            OrderDetails::where('order_id',$orderId)->update(['payment_status'=>1]);





            //Notification
            $shopIdList = ShopOrder::where('order_id', $orderId)->where('payment_status', 1)->get()->pluck('shop_id');

            $title = "Designer Muse New Order";
            $body = "A new order has been created";


             $token = NotificationDeviceToken::where('user_type','shopKeeper')->whereIn('user_id', $shopIdList)->pluck('token');


            sendNotification($title, $body, $token);

            //Notification

            //mail
            $shop = Shopkeeper::whereIn('id', $shopIdList)->get();
            //Notification Store
            foreach ($shop as $shoplist) {
                Notification::create(["user_type" => 3, "user_id" => $shoplist->id, "title" => $title, "body" => $body]);
            }
            //Notification Store

            if ($shop) {
                foreach ($shop as $list) {
                    $details = [
                        'name' => $list->name,
                    ];
                    Mail::to($list->email)->send(new OrderCompleteMail($details));
                }
            }
            if ($paymentInfo && $shoporder) {
                $data = [
                    'status' => 200,
                    'message' => "Successfully Order Payment Completed",
                    'order_id' => $request->orderID,
                ];
                return response()->json($data);
            } else {
                $data = [
                    'status' => 400,
                    'message' => "internal error ",
                    'order_id' => $request->orderID,
                ];
                return response()->json($data);
            }

        } else {
            $data = [
                'status' => 400,
                'message' => "internal error ",
                'order_id' => $request->orderID,
            ];
            return response()->json($data);
        }
    }

    public function productRatingReviewStore(Request $request)
    {
        $orderInfo = OrderDetails::find($request->order_details_id);
        $shop_id = $orderInfo->shop_id;
        $product_id = $orderInfo->product_id;
        $user_id = Auth::user()->id;

        $alreadyCompleted = ShopProductRatingReview::where('product_id', $product_id)->where('customer_id', $user_id)->first();
        if ($alreadyCompleted) {

            $data = [
                'status' => 400,
                'message' => "Rating review for this product has already been completed",
            ];
            return response()->json($data);
        }
        $review = new ShopProductRatingReview();
        $review->shop_id = $shop_id;
        $review->customer_id = $user_id;
        $review->product_id = $product_id;
        $review->rating = $request->rating;
        $review->review = $request->review;
        $review->save();

        $rating = ShopProductRatingReview::where('product_id', $product_id)->get();
        $totalUser = $rating->count();
        $totalRating = $rating->sum('rating');
        $avgRating = $totalRating / $totalUser;

        $product = ShopProduct::find($product_id);
        $product->avg_rating = $avgRating;
        $product->save();


        $shopProduct = ShopProduct::where('user_id', $shop_id)->where('avg_rating', '>=', 1)->get();
        $shopRatingProduct = $shopProduct->count();
        $shopTotalStar = $shopProduct->sum('avg_rating');
        $shopRating = $shopTotalStar / $shopRatingProduct;

        $shopkeeper = Shopkeeper::find($shop_id);
        $shopkeeper->avg_rating = $shopRating;
        $shopkeeper->save();

        $data = [
            'status' => 200,
            'message' => "Successfully Rating Review added",
        ];
        return response()->json($data);
    }
}
