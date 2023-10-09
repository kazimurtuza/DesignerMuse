<?php

namespace App\Http\Controllers\GeneralUser;

use App\Http\Controllers\Controller;
use App\Models\ProductColorVariant;
use App\Models\ShopProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cart;
use Illuminate\Validation\Rule;

class ShopCartController extends Controller
{
    public function success(){
        return view('success');
    }
    public function addToCart(Request $request)
    {
//----------------------------------------------------------------- Production ----------------------------------------------------------------------------
//PAYMENT
//        $extraMerchantData =  array(
//            'amounts' => array(100),
//            'charges' => array(0.3),
//            'chargeType' => array('percentage'),
//            'cc_charges' => array(3),
//            'cc_chargeType' => array('percentage'),
//            'ibans' => array('YOUR_VENDOR_IBAN_NUMBER')
//        );
//
//        $comon_array = array(
//            "merchant_id"=> "52415",
//            "username"=> "Designersmuse",
//            "password"=> stripslashes('zrkaatFY@760'),
//            "api_key"=> password_hash('d9d53764232764b46776be7e503874b2a4068e66',PASSWORD_BCRYPT),
//            "order_id"=> time(),
//            'total_price'=>1,
//            'success_url'=>'http://127.0.0.1:8000/success',
//            'error_url'=>'http://127.0.0.1:8000/success',
//            'notifyURL'=>'http://127.0.0.1:8000/success',
//            'test_mode'=>0,
//            'CurrencyCode'=>'KWD',
//            'CstFName'=>"Support",
//            'Cstemail'=>"support@upayments.com",
//            'CstMobile'=>"12345678",
////            'ExtraMerchantsData'=> json_encode($extraMerchantData),//Optional for multivendor API
//        );
//
//        $fields_string = http_build_query($comon_array);
//        $ch = curl_init();
//        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//        curl_setopt($ch, CURLOPT_URL,"https://api.upayments.com/payment-request");
//        curl_setopt($ch, CURLOPT_POST, 1);
//        curl_setopt($ch, CURLOPT_POSTFIELDS,$fields_string);
//        // receive server response ...
//
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        $server_output = curl_exec($ch);
//        curl_close ($ch);
//        $server_output = json_decode($server_output,true);
//
//        header('Location: '. $server_output['paymentURL']);
//
//        echo "<pre>";
//        print_r($server_output);//Here in the response, you will receive a URL where you have to redirect your customer for payment.
//        exit;





//----------------------------------------------------------------- Production ----------------------------------------------------------------------------




//  ------------------------------------------------------------Sandbox------------------------------------------------------------------------
//        if (!function_exists( 'curl_version')) {
//            exit ( "Enable cURL in PHP" );
//        } else {
            //Production Request Data
//            $request_data = array(
//                'merchant_id' => '1201',
//                'username' => 'test',
//                'password' => stripslashes('test'),
//                'api_key' => 'jtest123', // in sandbox request - password_hash('API_KEY',PASSWORD_BCRYPT), //In production, pass API_KEY with BCRYPT function
//                'order_id' => time(),
//                'CurrencyCode' => 'KWD',
//                'total_price' => 1,
//                'CstFName' => "Support",
//                'CstEmail' => "support@upayments.com",
//                'CstMobile' => "123456789",
//                'success_url' => 'http://127.0.0.1:8000/success',
//                'error_url' => 'http://127.0.0.1:8000/success',
//                'notifyURL' => 'http://127.0.0.1:8000/success/',
//                'test_mode' => 1,//Make it 0 if you use production API
//            );
//
//            $fields_string = http_build_query($request_data);
//            $ch = curl_init();
//            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//            curl_setopt($ch, CURLOPT_URL,"https://api.upayments.com/test-payment");
//            curl_setopt($ch, CURLOPT_POST, 1);
//            curl_setopt($ch, CURLOPT_POSTFIELDS,$fields_string);
//            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//            $server_output = curl_exec($ch);
//            curl_close ($ch);
//            $server_output = json_decode($server_output,true);
//
//            if ($server_output['status'] == 'success' && !empty($server_output['paymentURL'])) {
//                header('Location: '. $server_output['paymentURL']);
//            } else {
//                echo "<pre>";
//                print_r($server_output);
//            }
////        }
//        exit;















//        ------------------------------payment---------------------------
//        $extraMerchantData =  array(
//            'amounts' => array(100),
//            'charges' => array(0.3),
//            'chargeType' => array('percentage'),
//            'cc_charges' => array(3),
//            'cc_chargeType' => array('percentage'),
//            'ibans' => array('YOUR_VENDOR_IBAN_NUMBER')
//        );
//
//        $request_array = array(
//            "merchant_id"=> "1201",
//            "username"=> "test",
//            "password"=> stripslashes('test'),
//            'api_key' => 'jtest123',
////            "api_key"=> password_hash('API_KEY',PASSWORD_BCRYPT),
//            "order_id"=> time(),
//            'total_price'=>1,
//            'success_url'=>'http://127.0.0.1:8000/success',
//            'error_url'=>'http://127.0.0.1:8000/success',
//            'notifyURL'=>'http://127.0.0.1:8000/success',
//            'test_mode'=>1,
//            'CurrencyCode'=>'KWD',
////            'CstFName'=>"Support",
////            'Cstemail'=>"support@upayments.com",
////            'CstMobile'=>"12345678",
////            'ExtraMerchantsData'=> json_encode($extraMerchantData),//Optional for multivendor API
//        );
//
//        $fields_string = http_build_query($request_array);
//        $ch = curl_init();
//        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//        curl_setopt($ch, CURLOPT_URL,"https://api.upayments.com/payment-request");
//        curl_setopt($ch, CURLOPT_POST, 1);
//        curl_setopt($ch, CURLOPT_POSTFIELDS,$fields_string);
//        // receive server response ...
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        $server_output = curl_exec($ch);
//        curl_close ($ch);
//        $server_output = json_decode($server_output,true);
//
//        echo "<pre>";
//        print_r($server_output);//Here in the response, you will receive a URL where you have to redirect your customer for payment.
//        exit;
//        ------------------------------payment---------------------------

//  ------------------------------------------------------------Sandbox------------------------------------------------------------------------
//        payment




        if(!Auth::check()){
            return redirect()->back()->with('error','Please first login as a customer');
        }
        $product = ShopProduct::with('productImage')->find($request->product_id); // assuming you have a Product model with id, name, description & price
        $price=$product->price;
        $varientinfo=ProductColorVariant::find($request->variant_id);
        if($varientinfo){
            $price=$varientinfo->price;
        }
        $productimg='';
        if(count($product->productImage)>0){
            $productimg=$product->productImage[0]->image;
        }
        Cart::add($product->id, $product->name,$request->qty,$price, 550, ['size' => 'large','shop_id'=>$request->shop_id,'img' =>$productimg,'variant_id'=>$request->variant_id,'shipping_cost'=>$product->shipping_cost]);
        return redirect()->back()->with('success', 'Successfully Added to Cart');

    }

//    public function cardDetails(){
////        return Cart::content();
//        return Cart::content();
//    }

    public function carIncDec(Request $request)
    {

        $rowId= $request->product_id;
        if($request->type=='inc'){
            $qty=Cart::get($rowId)->qty+1;
        }else{
            $qty=Cart::get($rowId)->qty-1;
        }

        Cart::update($rowId, $qty);
        return back();


    }

    public function cardList()
    {
         $cartList = Cart::content();

        return view('frontend.shopCart.cartList')->with(compact('cartList'));
    }

}
