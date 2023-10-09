<?php

namespace App\Http\Controllers\Api\Shopkeeper;

use App\Http\Controllers\Controller;
use App\Http\Resources\ShopProductResource;
use App\Models\ProductColor;
use App\Models\ProductColorVariant;
use App\Models\ShopProduct;
use App\Models\ShopProductImage;
use App\Models\ShopProductRatingReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
use Laravel\Sanctum\PersonalAccessToken;

class ApiProductController extends Controller
{
    public function productList()
    {
        $shopId = auth()->user()->id;
        return ShopProductResource::collection(ShopProduct::where('user_id', $shopId)->paginate(10));
    }

    public function productDetails(Request $request)
    {
        return new ShopProductResource(ShopProduct::find($request->product_id));

    }

    public function relatedProduct(Request $request)
    {
        $token = $request->bearerToken();
        $tokenInfo = PersonalAccessToken::findToken($token);
        if ($tokenInfo) {
            $user = $tokenInfo->tokenable;
            Auth::login($user);
        }
        $category_id = ShopProduct::find($request->product_id)->category_id;
        return ShopProductResource::collection(ShopProduct::where('category_id', $category_id)->inRandomOrder()->paginate(10));
    }

    public function ratingReview(Request $request)
    {
        $product_id = $request->product_id;
        return ShopProductRatingReview::where('product_id', $product_id)->with('clientInfo')->paginate(5);
    }
    public function categoryWiseProductList(Request $request)
    {
        $token = $request->bearerToken();
        $tokenInfo = PersonalAccessToken::findToken($token);
        if ($tokenInfo) {
            $user = $tokenInfo->tokenable;
            Auth::login($user);
        }
        return ShopProductResource::collection(ShopProduct::where('category_id', $request->category_id)->paginate(10));
    }

    public function productStore(Request $request)
    {
        $user_id = auth()->user()->id;
        $shopProduct = new ShopProduct();
        $shopProduct->name = $request->name;
        $shopProduct->user_id = $user_id;
        if ($request->is_variant) {
            $shopProduct->is_variant = 1;
        } else {
            $shopProduct->is_variant = 0;
        }
        $shopProduct->category_id = $request->category;
        if ($request->current_sale_price) {
            $shopProduct->price = $request->current_sale_price;
        } else {
            $shopProduct->price = 0;
        }

        $shopProduct->cost = $request->current_purchase_cost;
        $shopProduct->measurement = $request->measurement;


        if (!empty($request->ar_img)) {
            $file = $request->file('ar_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('uploads/arImg'), $filename);
            $shopProduct->ar_img = 'public/uploads/arImg/' . $filename;
        }
        $shopProduct->discount_type = $request->discount_type;
        $shopProduct->discount = $request->discount;
        $shopProduct->description = $request->description;
        $shopProduct->shipping_cost = $request->shipping_cost;
        $shopProduct->status = 1;
        $shopProduct->save();
        $shopProduct->product_code = 10000 + $shopProduct->id;
        $shopProduct->save();

        if (isset($request->product_img)) {
            foreach ($request->product_img as $key => $image) {
                if (isset($image) && ($image != '') && ($image != null)) {
                    $newProductImage = new ShopProductImage();
                    $newProductImage->product_id = $shopProduct->id;
                    $newProductImage->image = $this->productImageSave($image);
                    $newProductImage->save();
                }
            }
        }

        if ($request->is_variant) {
            foreach ($request->color_id as $key => $color) {
                $productColor = new ProductColorVariant();
                $productColor->product_id = $shopProduct->id;
                $productColor->color_id = $color;
                $productColor->price = $request->price[$key];
                $productColor->save();
            }
            $minPrice = ProductColorVariant::where('product_id', $shopProduct->id)->min('price');
            $maxPrice = ProductColorVariant::where('product_id', $shopProduct->id)->max('price');
            $shopProduct->min_price = $minPrice;
            $shopProduct->max_price = $maxPrice;
            $shopProduct->save();
        } else {
            if ($request->color_no_variant[0] != null && count($request->color_no_variant) > 0) {
                foreach ($request->color_no_variant as $color) {
                    $productColor = new ProductColorVariant();
                    $productColor->product_id = $shopProduct->id;
                    $productColor->color_id = $color;
                    $productColor->price = $request->current_sale_price;
                    $productColor->save();
                }
            } else {
                $colorId = '';
                $colorolor = ProductColor::where('name', 'nullColor')->first();
                if (!$colorolor) {
                    $color = new ProductColor();
                    $color->name = 'nullColor';
                    $color->color_code = '#000000';
                    $color->save();
                    $colorId = $color->id;
                } else {
                    $colorId = $colorolor->id;
                }
                $productColor = new ProductColorVariant();
                $productColor->product_id = $shopProduct->id;
                $productColor->color_id = $colorId;
                $productColor->price = $request->current_sale_price;
                $productColor->save();
            }
        }
        if ($shopProduct) {
            $data = [
                'status' => 200,
                'message' => 'Successfully product  Created',
                'data' => new ShopProductResource($shopProduct)
            ];
            return response()->json($data);
        }
    }


    public function productUpdate(Request $request)
    {
        $user_id = auth()->user()->id;
        $shopProduct = ShopProduct::where('user_id', $user_id)->where('id', $request->product_id)->first();
        $shopProduct->name = $request->name;
        $shopProduct->user_id = $user_id;
        if ($request->is_variant) {
            $shopProduct->is_variant = 1;
        } else {
            $shopProduct->is_variant = 0;
        }
        $shopProduct->category_id = $request->category;
        $shopProduct->price = $request->current_sale_price;
        $shopProduct->cost = $request->current_purchase_cost;
        $shopProduct->discount_type = $request->discount_type;
        $shopProduct->discount = $request->discount;
        $shopProduct->description = $request->description;
        $shopProduct->measurement = $request->measurement;
        if (!empty($request->ar_img)) {
            $file = $request->file('ar_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('uploads/arImg'), $filename);
            $shopProduct->ar_img = 'public/uploads/arImg/' . $filename;
        }
        $shopProduct->status = 1;
        $shopProduct->save();

        if ($request->is_variant) {

            if ($request->variant_id[0] != null && $request->variant_id) {
                ProductColorVariant::whereNotIn('id', $request->variant_id)->delete();

                foreach ($request->variant_id as $key => $variantId) {
                    $variant = ProductColorVariant::find($variantId);
                    $variant->price = $request->variant_price[$key];
                    $variant->save();
                }
            }
            if (!$request->color_id[0] == null) {
                if (isset($request->color_id) && count($request->color_id) > 0) {
                    foreach ($request->color_id as $key => $color) {
                        $productColor = new ProductColorVariant();
                        $productColor->product_id = $shopProduct->id;
                        $productColor->color_id = $color;
                        $productColor->price = $request->price[$key];
                        $productColor->save();
                    }
                }
            }


        } else {
            if (!isset($request->color_no_variant)) {
                $colorId = '';
                $colorolor = ProductColor::where('name', 'nullColor')->first();
                if (!$colorolor) {
                    $color = new ProductColor();
                    $color->name = 'nullColor';
                    $color->color_code = '#000000';
                    $color->save();
                    $colorId = $color->id;
                } else {
                    $colorId = $colorolor->id;
                }
                $productColor = new ProductColorVariant();
                $productColor->product_id = $shopProduct->id;
                $productColor->color_id = $colorId;
                $productColor->price = $request->current_sale_price;
                $productColor->save();

            } else {
                ProductColorVariant::where('product_id', $request->product_id)->whereNotIn('color_id', $request->color_no_variant)->delete();
                foreach ($request->color_no_variant as $color) {
                    $isStay = ProductColorVariant::where('product_id', $request->product_id)->where('color_id', $color)->first();
                    if ($isStay) {
                        $productColor = $isStay;
                    } else {
                        $productColor = new ProductColorVariant();
                    }
                    $productColor->product_id = $shopProduct->id;
                    $productColor->color_id = $color;
                    $productColor->price = $request->current_sale_price;
                    $productColor->save();

                }
            }
        }
        if (isset($request->product_img) && $request->product_img[0] != null) {
            foreach ($request->product_img as $key => $image) {
                if (isset($image) && ($image != '') && ($image != null)) {
                    $newProductImage = new ShopProductImage;
                    $newProductImage->product_id = $shopProduct->id;
                    $newProductImage->image = $this->productImageSave($image);
                    $newProductImage->save();
                }
            }
        }

        $data = [
            'status' => 200,
            'message' => 'Successfully product  updated',
            'data' => new ShopProductResource($shopProduct)
        ];
        return response()->json($data);

    }


    public function productColorList()
    {
        return ProductColor::get();
    }


    public function productImgDelete(Request $request)
    {
        $info = ShopProductImage::where('id', $request->id)->delete();
        $data = [
            'status' => 200,
            'message' => 'Successfully product Image deleted',
            'data' => $info
        ];
        return response()->json($data);
    }


    public function productImageSave($image)
    {
        if (isset($image) && ($image != '') && ($image != null)) {
            $ext = explode('/', mime_content_type($image))[1];

            $logo_url = "product_images-" . time() . rand(1000, 9999) . '.' . $ext;
            $logo_directory = getUploadPath() . '/product_images/';
            $filePath = $logo_directory;
            $logo_path = $filePath . $logo_url;
            $db_media_img_path = 'storage/product_images/' . $logo_url;

            if (!file_exists($filePath)) {
                mkdir($filePath, 666, true);
            }
            $logo_image = Image::make(file_get_contents($image))->resize(400, 400);
            $logo_image->brightness(8);
            $logo_image->contrast(11);
            $logo_image->sharpen(5);
            $logo_image->encode('webp', 70);
            $logo_image->save($logo_path);

            return $db_media_img_path;
        }
    }

    public function productDelete(Request $request)
    {
        $shop_id = auth()->user()->id;
        $info = ShopProduct::where('id', $request->product_id)->where('user_id', $shop_id)->update(['is_deleted' => 1]);
        if ($info) {
            $data = [
                'status' => 200,
                'message' => 'Successfully product  deleted',
                'data' => $info
            ];
            return response()->json($data);

        } else {
            $data = [
                'status' => 400,
                'message' => 'This is not your Product',
                'data' => $info
            ];
            return response()->json($data);

        }


    }
}
