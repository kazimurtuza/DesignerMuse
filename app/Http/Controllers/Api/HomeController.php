<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ShopKeeper\ProductController;
use App\Http\Resources\OrderDetailsResource;
use App\Http\Resources\PopularProductResource;
use App\Http\Resources\ShopProductResource;
use App\Models\Designer;
use App\Models\OrderDetails;
use App\Models\Shopkeeper;
use App\Models\ShopProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function popularProduct(){
        return PopularProductResource::collection(OrderDetails::where('payment_status',1)->groupBy('product_id')->select('product_id',DB::raw('sum(quantity) as total_sell'))->orderBy('total_sell','desc')->paginate(10));

    }
    public function searchProduct(Request $request){
        $total_item=10;
        if($request->total_item>0){
            $total_item=$request->total_item;
        }
        if($request->shop_id){
            return ShopProductResource::collection(ShopProduct::where('status',1)->where('user_id',$request->shop_id)->where('name','LIKE','%'.$request->name.'%')->paginate($total_item));
        }else{
            return ShopProductResource::collection(ShopProduct::where('status',1)->where('name','LIKE','%'.$request->name.'%')->paginate($total_item));
        }

    }
    public function shopDesignerCount(){
        $designer=Designer::where('status',1)->count();
        $shop=Shopkeeper::where('status',1)->count();
        $data = [
            'status' => 200,
            'total_designer' =>$designer ,
            'total_shop' =>$shop,
        ];
        return response()->json($data, 200);
    }
}
