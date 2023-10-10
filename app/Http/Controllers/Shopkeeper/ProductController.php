<?php

namespace App\Http\Controllers\Shopkeeper;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\ProductColor;
use App\Models\ProductColorVariant;
use App\Models\ShopProduct;
use App\Models\ShopProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
use PhpParser\Node\Expr\Array_;

class ProductController extends Controller
{
    public function addProduct()
    {
        $common_data = new Array_();
        $common_data->title =languageGet()=='en'?'Add Product':'أضف منتج';
        $category = ProductCategory::get();
        $color = ProductColor::get();
        return view('shopkeeper.product.add_product')->with(compact('category', 'color', 'common_data'));
    }

    public function productStore(Request $request)
    {
        $user_id = Auth::guard('shopkeeper')->user()->id;
        $shopProduct = new ShopProduct();
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
        $shopProduct->measurement = $request->measurement;


        if (!empty($request->img_data)) {
            $file =$request->file('img_data');
             $extension = $file->getClientOriginalExtension();
            $filename = time().'.' . $extension;
            $file->move(public_path('uploads/arImg'), $filename);
            $shopProduct->ar_img = 'public/uploads/arImg/'.$filename;
        }
        $shopProduct->discount_type = $request->discount_type;
        $shopProduct->discount = $request->discount;
        $shopProduct->description = $request->description;
        $shopProduct->shipping_cost = $request->shipping_cost;
        $shopProduct->status = 1;
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
            if (isset($request->color_no_variant)&&count($request->color_no_variant) > 0) {
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
        return redirect()->back()->with('success', 'Successfully created product ');
    }

    public function productList()
    {
        $common_data = new Array_();
        $common_data->title =languageGet()=='en'?'Product List':'قائمة المنتجات';
        $user_id = Auth::guard('shopkeeper')->user()->id;

        $productList = ShopProduct::with('colorVariant')->where('user_id', $user_id)->with('productImage')->with('colorVariant')->get();
        return view('shopkeeper.product.product_list')->with(compact('productList', 'common_data'));
    }


    public function productEdit(Request $request)
    {
        $common_data = new Array_();
        $common_data->title = 'Edit Product';
        $category = ProductCategory::get();
        $color = ProductColor::get();
        $productInfo = ShopProduct::find($request->product_id);
        return view('shopkeeper.product._edit_product')->with(compact('productInfo', 'category', 'color', 'common_data'));
    }

    public function productUpdate(Request $request)
    {
        $user_id = Auth::guard('shopkeeper')->user()->id;
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
        $shopProduct->measurement = $request->measurement;
        $shopProduct->shipping_cost = $request->shipping_cost;
        if (isset($request->ar_img)) {
            if (!empty($request->ar_img)) {
                $file = $request->file('ar_img');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move(public_path('uploads/arImg'), $filename);
                $shopProduct->ar_img = 'public/uploads/arImg/' . $filename;
            }
        }
        $shopProduct->description = $request->description;
        $shopProduct->status = 1;
        $shopProduct->save();
        if ($request->is_variant) {
            if($request->variant_id){
                ProductColorVariant::whereNotIn('id', $request->variant_id)->delete();

                foreach ($request->variant_id as $key => $variantId) {
                    $variant = ProductColorVariant::find($variantId);
                    $variant->price = $request->variant_price[$key];
                    $variant->save();
                }
            }

            if (isset($request->color_id) && count($request->color_id) > 0) {
                foreach ($request->color_id as $key => $color) {
                    $productColor = new ProductColorVariant();
                    $productColor->product_id = $shopProduct->id;
                    $productColor->color_id = $color;
                    $productColor->price = $request->price[$key];
                    $productColor->save();
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

                }
            else {
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
        return redirect()->back()->with('success', 'Successfully  product Updated');
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
    public function productImgDelete(Request $request)
    {
        ShopProductImage::where('id', $request->id)->delete();
        return true;
    }

}
