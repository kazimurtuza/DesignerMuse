<?php

namespace App\Http\Controllers\Designer;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DesingerReportController extends Controller
{
    public function financialReport(){
         $designer_id = Auth::guard('designer')->user()->id;
         $payment=Payment::where('sector_type',0)->where('payment_status',1)->where("designer_id",$designer_id)->orderBy('id','desc')->paginate(10);
        return view('designer.report.financialReport')->with(compact('payment'));
    }
}
