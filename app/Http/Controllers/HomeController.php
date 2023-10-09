<?php

namespace App\Http\Controllers;

use App\Models\Designer;
use App\Models\Shopkeeper;
use App\Models\ShopProduct;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $shopProductList = ShopProduct::where('is_deleted', 0)->with('productImage')->inRandomOrder()->orderBy('avg_rating')->paginate(10);
        $totalDesigner = Designer::where('is_deleted', 0)->count();
        $productItem = ShopProduct::where('is_deleted', 0)->count();
        return view('frontend/index')->with(compact('shopProductList', 'productItem', 'totalDesigner'));
    }
}
