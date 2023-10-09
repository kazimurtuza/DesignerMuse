<?php

namespace App\Http\Controllers\Api\Designer;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class ApiDesignerReportController extends Controller
{
    public function financialReport(){
        $designer_id = auth()->user()->id;
        return Payment::where('sector_type',0)->where('payment_status',1)->where("designer_id",$designer_id)->orderBy('id','desc')->paginate(10);

    }
}
