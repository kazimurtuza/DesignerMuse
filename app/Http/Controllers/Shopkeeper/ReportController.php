<?php

namespace App\Http\Controllers\Shopkeeper;

use App\Http\Controllers\Controller;
use App\Models\ShopOrder;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function financialReport(){
         $shop_id = Auth::guard('shopkeeper')->user()->id;
         $orderInfo= ShopOrder::where('shop_id',$shop_id)->with('orderItems')->with('orderInfo')->where('payment_status',1)->get();
         return view('shopkeeper.report.financialReport')->with(compact('orderInfo'));
    }
    public function withdrawalList(){
         $shop_id = Auth::guard('shopkeeper')->user()->id;
         $withdrawalList=Withdrawal::where('sector_type',2)->where('shopkeeper_id',$shop_id)->get();
         return view('shopkeeper.report.withdrawalList')->with(compact('withdrawalList'));


    }
}
