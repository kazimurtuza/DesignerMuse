<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ShopApproved;
use App\Mail\UserMailVerification;
use App\Models\AdminSetting;
use App\Models\ProductCategory;
use App\Models\ProductColor;
use App\Models\Shopkeeper;
use Carbon\Carbon;
use Faker\Core\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpMyAdmin\Config\Settings;

class ShopController extends Controller
{
    public function colorSetting()
    {
        $color = ProductColor::get();
        return view('admin.shop.color_list')->with(compact('color'));
    }

    public function colorStore(Request $request)
    {

        foreach ($request->color_name as $key => $name) {
            $color = new ProductColor();
            $color->name = $name;
            $color->color_code = $request->color[$key];
            $color->save();
        }
        return redirect()->back()->with('success', 'Successfully Product Color Saved');
    }

    public function colorUpdate(Request $request)
    {
        $color = ProductColor::find($request->color_id);
        $color->name = $request->color_name;
        $color->color_code = $request->color;
        $color->save();
        return redirect()->back()->with('success', 'Successfully Updated Color ');
    }

    public function productCategoryList()
    {
        $category = ProductCategory::get();
        return view('admin.shop.product_category')->with(compact('category'));
    }

    public function productCategoryStore(Request $request)
    {
        foreach ($request->category_name as $key => $category) {
            $isDuplicate = ProductCategory::where('name', $category)->first();
            if (!$isDuplicate) {
                $categoryData = new ProductCategory();
                $categoryData->name = $category;
                $categoryData->save();
            }

        }
        return redirect()->back()->with('success', 'Successfully Product Category Saved');
    }

    public function productCategoryUpdate(Request $request)
    {
        $categoryData = ProductCategory::find($request->category_id);
        $categoryData->name = $request->category_name;
        $categoryData->save();
        return redirect()->back()->with('success', 'Successfully Product Category Updated');
    }

    public function deletedShopList()
    {
        $shopList = Shopkeeper::where('is_deleted', 1)->get();
        return view('admin.shop.pending_shop_list')->with(compact('shopList'));
    }

    public function ShopActiveList()
    {
        $shopList = Shopkeeper::where('is_deleted', 0)->get();
        $setting = AdminSetting::first();
        $sellRate = null;
        if ($setting) {
            $sellRate = $setting->product_charge_rate;
        }

        return view('admin.shop.active_shop_list')->with(compact('shopList', 'sellRate'));
    }

    public function approveShopRequest(Request $request)
    {
        $shop = Shopkeeper::find($request->shop_id);
        $shop->is_deleted = 0;
        $shop->approved_data = Carbon::now();
        $shop->save();

        $details = [
            'user_type' => 'shop_keeper',
            'title' => 'Mail from Designers Muse Shop Active',
            'name' => $shop->name,

        ];

        Mail::to($shop->email)->send(new ShopApproved($details));

        return redirect()->back()->with('success', 'Successfully registration completed. Please check your mail and verify ');


        return redirect()->back()->with('success', 'Successfully Shop Activated');
    }

    public function shopInactive(Request $request)
    {
        $shop = Shopkeeper::find($request->shop_id);
        $shop->is_deleted = 1;
        $shop->save();
        return redirect()->back()->with('success', 'Successfully Shop Deactivated');
    }

    public function serviceChargeUpdate(Request $request)
    {
        $shop = Shopkeeper::find($request->shop_id);
        $shop->product_charge_rate = $request->rate;
        $shop->save();
        return redirect()->back()->with('success', 'Successfully service rate updated');
    }
}
