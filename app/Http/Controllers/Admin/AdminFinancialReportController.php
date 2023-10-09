<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class AdminFinancialReportController extends Controller
{
    public function financialReport(Request $request)
    {
        $startDate = $request->start_date;
        $endDate = $request->end_date;
        if ($startDate && $endDate) {
            $payment = Payment::where('payment_status', 1)->whereBetween('date',[$startDate,$endDate])->get();
        } else {
            $payment = Payment::where('payment_status', 1)->get();
        }

        return view('admin.report.financialReport')->with(compact('payment'));
    }
}
