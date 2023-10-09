<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductRatingReviewCollection;
use App\Http\Resources\ProductRatingReviewResource;
use App\Http\Resources\ShopkeeperResource;
use App\Http\Resources\ShopProductResource;
use App\Http\Resources\ShopResource;
use App\Models\ProductCategory;
use App\Models\Shopkeeper;
use App\Models\ShopProduct;
use App\Models\ShopProductRatingReview;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\PersonalAccessToken;

class FrontendShopkeeperController extends Controller
{
    public function shopkeeperList()
    {
        return $shopkeeper = ShopkeeperResource::collection(Shopkeeper::where('is_deleted', 0)->paginate(10));

    }

    public function shopkeeperDetails(Request $request)
    {
        return new ShopkeeperResource(Shopkeeper::find($request->shopkeeper_id));
    }

    public function shopProductList(Request $request)
    {
        $token = $request->bearerToken();
        $tokenInfo = PersonalAccessToken::findToken($token);
        if ($tokenInfo) {
            $user = $tokenInfo->tokenable;
            Auth::login($user);
        }
        if ($request->category_id) {
            return ShopProductResource::collection(ShopProduct::where('user_id', $request->shopkeeper_id)->where('category_id', $request->category_id)->where('is_deleted', 0)->paginate(10));
        }
        return ShopProductResource::collection(ShopProduct::where('user_id', $request->shopkeeper_id)->where('is_deleted', 0)->paginate(10));
    }

    public function shopProductDetails(Request $request)
    {
        $token = $request->bearerToken();
        $tokenInfo = PersonalAccessToken::findToken($token);
        if ($tokenInfo) {
            $user = $tokenInfo->tokenable;
            Auth::login($user);
        }

        return new ShopProductResource(ShopProduct::find($request->product_id));
    }

    public function productCategory()
    {
        return ProductCategory::where('status', 1)->get();
    }

    public function ratingReviewList(Request $request)
    {
//        return ShopProductRatingReview::where('shop_id',$request->shop_id)->paginate(10);
        return ProductRatingReviewResource::collection(ShopProductRatingReview::where('shop_id', $request->shop_id)->paginate(10));
    }


}
