<?php

namespace App\Http\Controllers\Api\shopkeeper;

use App\Http\Controllers\Controller;
use App\Http\Resources\ShopkeeperFinancialReportResource;
use App\Models\ShopOrder;
use Illuminate\Http\Request;

class ShopkeeperReportController extends Controller
{


    public function financialReport(){

        $shopId =auth()->user()->id;
        return ShopkeeperFinancialReportResource::collection($orderInfo= ShopOrder::where('shop_id',$shopId)->with('orderItems')->with('orderInfo')->where('payment_status',1)->orderBy('id','desc')->paginate(10)) ;

    }
}
