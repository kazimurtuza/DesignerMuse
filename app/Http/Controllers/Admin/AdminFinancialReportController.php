<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Array_;

class AdminFinancialReportController extends Controller
{
    public function financialReport(Request $request)
    {
        $common_data = new Array_();
        $common_data->title ="Financial Report";
        $startDate = $request->start_date;
        $endDate = $request->end_date;
        if ($startDate && $endDate) {
            $payment = Payment::where('payment_status', 1)->whereBetween('date',[$startDate,$endDate])->get();
        } else {
            $payment = Payment::where('payment_status', 1)->get();
        }

        return view('admin.report.financialReport')->with(compact('payment','common_data'));
    }
}
