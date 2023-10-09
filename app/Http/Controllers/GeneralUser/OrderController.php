<?php

namespace App\Http\Controllers\GeneralUser;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\ShopOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function myOrder(){
         $userId= Auth::user()->id;
         $order_list= Order::where('customer_id',$userId)->where('payment_status',1)->orderBy('id','DESC')->paginate(10);
         return view('frontend.customer.customer_order')->with(compact('order_list'));
    }
    public function orderDetails(Request $request){
         $orderDetails= ShopOrder::with('orderInfo')->with('orderItems')->where('order_id',$request->order_id)->first();
         return view('frontend.customer.order.order_details')->with(compact('orderDetails'));
    }
}
