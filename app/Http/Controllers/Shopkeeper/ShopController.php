<?php

namespace App\Http\Controllers\Shopkeeper;

use App\Http\Controllers\Controller;
use App\Models\ProductColorVariant;
use App\Models\Shopkeeper;
use App\Models\ShopkeeperDetails;
use App\Models\ShopProduct;
use App\Models\ShopProductImage;
use App\Models\ShopProductRatingReview;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ShopController extends Controller
{
    public function shopHome(){
        return view('shopkeeper.index');
    }
    public function shopList(){
        $shopList=Shopkeeper::with('details')->where('is_authentic',1)->where('is_deleted',0)->paginate(12);
        return view('frontend.shop.shopList')->with(compact('shopList'));
    }

    public function profileView($shop_id){
        $shopInfo=ShopkeeperDetails::where('user_id',$shop_id)->first();
        $shop=Shopkeeper::where('id',$shop_id)->first();
         $shopRating=ShopProductRatingReview::inRandomOrder()->paginate(5);
        return view('frontend.shop.profile_view')->with(compact('shopInfo','shop','shopRating'));
    }
    public function allProductList(Request $request){
        $productList= ShopProduct::with('productImage')->with('colorVariant')->where('user_id',$request->shop_id)->get();
         return view('frontend.shop.product_list')->with(compact('productList'));
    }

    public function productDetails(Request $request){
        $productDetails=ShopProduct::with('productImage')->with('colorVariant')->find($request->product_id);
        $product=$productDetails;
        $isVariant=$productDetails->is_variant;
        $category=$productDetails->category_id;
        $user_id=$productDetails->user_id;
        $product_id=$productDetails->id;
        $minPrice= $productDetails->colorVariant->min('price');
        $maxPrice= $productDetails->colorVariant->max('price');
        $related_products= ShopProduct::with('productImage')->with('colorVariant')->whereNotIn('id', [$product_id])->where('category_id',$category)->where('user_id',$user_id)->inRandomOrder()->limit(6)->get();
//         dd($related_products);
        return view('frontend.shopProduct.product_details')->with(compact('productDetails','related_products','product','minPrice','maxPrice','isVariant'));

    }




}
