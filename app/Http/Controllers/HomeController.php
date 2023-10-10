<?php

namespace App\Http\Controllers;

use App\Http\Resources\AboutOusResource;
use App\Http\Resources\HomePageResource;
use App\Http\Resources\HomePageTopSectionResource;
use App\Models\AboutOus;
use App\Models\Designer;
use App\Models\HomePage;
use App\Models\HomePageTopBare;
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
        $homeInfo = new HomePageResource(HomePage::first());
        $homeData = response()->json($homeInfo);
        $home = $homeData->getData();
        $homeTopInfo = HomePageTopSectionResource::collection(HomePageTopBare::where('is_active',1)->get());
        $homeTopData = response()->json($homeTopInfo);
        $homeTopSection = $homeTopData->getData();
        return view('frontend/index')->with(compact('shopProductList', 'productItem', 'totalDesigner','home','homeTopSection'));
    }
}
