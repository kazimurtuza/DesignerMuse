<?php

namespace App\Http\Controllers\Api\Shopkeeper;

use App\Http\Controllers\Controller;
use App\Http\Resources\ShopOrderResource;
use App\Models\Order;
use App\Models\ShopOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiShopProductOrderController extends Controller
{
    public function shopkeeperPendingOrder()
    {
        $shopId =auth()->user()->id;
        return ShopOrder::where('shop_id',$shopId)->where('status',0)->where('payment_status',1)->orderBy('id','desc')->paginate(10);
    }

    public function shopkeeperCompletedOrder()
    {
        $shopId =auth()->user()->id;
        return ShopOrder::where('shop_id',$shopId)->where('status',2)->where('payment_status',1)->orderBy('id','desc')->paginate(10);
    }
    public function shopkeeperProcessingOrder(){
        $shopId =auth()->user()->id;
        return ShopOrder::where('shop_id',$shopId)->where('status',1)->where('payment_status',1)->orderBy('id','desc')->paginate(10);
    }
    public function shopkeeperAllOrder(){
        $shopId =auth()->user()->id;
        return ShopOrder::where('shop_id',$shopId)->where('status',1)->where('payment_status',1)->orderBy('id','desc')->paginate(10);
    }

    public function orderDetails(Request $request){
        return  new ShopOrderResource(ShopOrder::find($request->order_id));
    }
    public function updateOrderStatus(Request $request){
        $shopOrder=ShopOrder::find($request->order_id);
        $shopOrder->status=$request->status;
        $shopOrder->save();
        if($shopOrder){
            $data = [
                'status' => 200,
                'message' => 'Invalid email address',
                'data' => $shopOrder,
            ];
            return response()->json($data, 200);
        }

    }
}
