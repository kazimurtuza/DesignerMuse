<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ArWishList;
use App\Models\ProductWishList;
use App\Models\ShopProduct;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopWishlistController extends Controller
{

    function wishList(Request $request){
        $user_id=Auth::user()->id;
        $productList=ProductWishList::where('user_id',$user_id)->get();
        return view('frontend.shop.wishList')->with(compact('productList'));
    }
    function wishAdd(Request $request){
        $product_id=$request->product_id;
        $user_id=Auth::user()->id;

        $already=ProductWishList::where('user_id',$user_id)->where('product_id',$product_id)->first();
        if($already){
            return redirect()->back()->with('error','Already added to wish list');
        }
        $arWish=new ProductWishList();
        $arWish->product_id=$product_id;
        $arWish->user_id=$user_id;
        $arWish->save();
        return redirect()->back()->with('success','Successfully add to wish list');
    }
    function arAdd(Request $request){
        $product_id=$request->product_id;
        $user_id=Auth::user()->id;
        $already=ArWishList::where('user_id',$user_id)->where('product_id',$product_id)->first();
        if($already){
            return redirect()->back()->with('error','Already added to Ar');
        }
        $arImg=ShopProduct::find($product_id)->ar_img;
        $arWish=new ArWishList();
        $arWish->product_id=$product_id;
        $arWish->user_id=$user_id;
        $arWish->ar_img=$arImg;
        $arWish->save();
        return redirect()->back()->with('success','Successfully add to Ar list');
    }
}
