<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Array_;

class ShopOrderController extends Controller
{
    public function shopOrderList()
    {
        $common_data = new Array_();
        $common_data->title ="Shop Order List";
        $allOrder = Order::where('payment_status', 1)->get();
        return view('admin.shop.order.order_list')->with(compact('allOrder','common_data'));
    }

    public function shopOrderDetailsGet(Request $request)
    {
        $order_id = $request->order_id;
        $orderInfo = Order::with('shopOrder')->find($order_id);
        return view('admin.shop.order._order_details')->with(compact('orderInfo'))->render();

    }
}
