<?php

namespace App\Http\Controllers\Api\GeneralUser;

use App\Http\Controllers\Controller;
use App\Http\Resources\WishArListResource;
use App\Http\Resources\WishListResource;
use App\Models\ArWishList;
use App\Models\ProductWishList;
use App\Models\ShopProduct;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function wishList(Request $request)
    {
        $user_id = Auth::user()->id;
        return WishListResource::collection(ProductWishList::where('user_id', $user_id)->paginate(10));

    }

    function wishAdd(Request $request)
    {
        $product_id = $request->product_id;
        $user_id = Auth::user()->id;
        $already = ProductWishList::where('user_id', $user_id)->where('product_id', $product_id)->first();
        if ($already) {
            ProductWishList::where('user_id', $user_id)->where('product_id', $product_id)->delete();
            $data = [
                'status' => 200,
                'message' => 'Removed from wish list',
            ];
            return response()->json($data);
        }
        $arWish = new ProductWishList();
        $arWish->product_id = $product_id;
        $arWish->user_id = $user_id;
        $arWish->save();
        $data = [
            'status' => 200,
            'message' => 'Successfully added to wish list',
        ];
        return response()->json($data);
    }


    public function arList(Request $request)
    {
        $user_id = Auth::user()->id;
        return WishArListResource::collection(ArWishList::where('user_id', $user_id)->paginate(10));
    }

    public function addAirList(Request $request)
    {
        $user_id = Auth::user()->id;
        $product_id = $request->product_id;

        $already = ArWishList::where('user_id', $user_id)->where('product_id', $product_id)->first();
        if ($already) {
            ArWishList::where('user_id', $user_id)->where('product_id', $product_id)->delete();
            $data = [
                'status' => 200,
                'message' => 'Successfully deleted Ar',
            ];
            return response()->json($data);
        }
        $arImg = ShopProduct::find($product_id)->ar_img;
        $arWish = new ArWishList();
        $arWish->product_id = $product_id;
        $arWish->user_id = $user_id;
        $arWish->ar_img = $arImg;
        $arWish->save();
        $data = [
            'status' => 200,
            'message' => 'Successfully added to Ar',
        ];
        return response()->json($data);
    }

    public function arDelete(Request $request)
    {
        $request->validate([
            'wish_id' => 'required',
        ]);
        $user_id = Auth::user()->id;
        $arwishid = $request->wish_id;
        ArWishList::where('user_id', $user_id)->where('id', $arwishid)->delete();
        $data = [
            'status' => 200,
            'message' => 'Successfully Ar Deleted',
        ];
        return response()->json($data);
    }

    public function wishDelete(Request $request)
    {
        $request->validate([
            'wish_id' => 'required',
        ]);
        $user_id = Auth::user()->id;
        $wishId = $request->wish_id;
        ProductWishList::where('user_id', $user_id)->where('id', $wishId)->delete();
        $data = [
            'status' => 200,
            'message' => 'Successfully wish product deleted',
        ];
        return response()->json($data);
    }
}
