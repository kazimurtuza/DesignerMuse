<?php

namespace App\Http\Controllers\Designer;

use App\Http\Controllers\Controller;
use App\Models\BankAccount;
use App\Models\Payment;
use App\Models\Withdrawal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BillBalanceController extends Controller
{
    function myBalance()
    {
        $designer_id = Auth::guard('designer')->user()->id;
        $totalCashIn = Payment::where('sector_type', 1)->where('designer_id', $designer_id)->sum('total_amount');
        $totalServiceCharge=Payment::where('sector_type', 1)->where('designer_id', $designer_id)->sum('service_charge_amount');
        $withdrawal = Withdrawal::where('sector_type', 1)->where('designer_id', $designer_id)->orderBy('id', 'desc')->take(5)->get();
        $allWithdrawal = Withdrawal::where('sector_type', 1)->where('designer_id', $designer_id)->get();
        $totalCashOut = $allWithdrawal->sum('withdrawal_amount');
        $totalCompletedWithdrawal = Withdrawal::where('sector_type', 1)->where('status', 1)->where('designer_id', $designer_id)->sum('withdrawal_amount');
        $availableBalance = $totalCashIn - $totalCashOut-$totalServiceCharge;
        $bankList = BankAccount::where('user_id', $designer_id)->where('sector', 1)->get();
        return view('designer.balance.myBalance')->with(compact('availableBalance', 'totalCompletedWithdrawal', 'withdrawal', 'bankList'));
    }

    function withdrawalRequest(Request $request)
    {
        $bankId=$request->bank_id;
        $bankInfo=BankAccount::find($bankId);
        $designer_id = Auth::guard('designer')->user()->id;
        $totalCashIn = Payment::where('sector_type', 1)->where('designer_id', $designer_id)->sum('total_amount');
        $totalServiceCharge=Payment::where('sector_type', 1)->where('designer_id', $designer_id)->sum('service_charge_amount');
        $totalCashOut = Withdrawal::where('sector_type', 1)->where('designer_id', $designer_id)->sum('withdrawal_amount');
        $availableBalance = $totalCashIn - $totalCashOut-$totalServiceCharge;
        if ($request->balance > $availableBalance) {
            return redirect()->back()->with('error', 'insufficient balance in your account');
        } else {
            $withdrawal = new Withdrawal();
            $withdrawal->sector_type = 1;
            $withdrawal->withdrawal_amount = $request->balance;
            $withdrawal->designer_id = $designer_id;
            $withdrawal->status = 0;
            $withdrawal->bank_id=$bankId;
            $withdrawal->acc_name=$bankInfo->bank_name;
            $withdrawal->acc_number=$bankInfo->acc_number;
            $withdrawal->routing_number=$bankInfo->routing_number;
            $withdrawal->withdrawal_request_date = Carbon::now();
            $withdrawal->save();
            $withdrawal->id_no = 10000 + $withdrawal->id;
            $withdrawal->save();
        }
        return redirect()->back()->with('success', 'Successfully withdrawal request done');
    }

    function designerPaymentList()
    {
        $designer_id = Auth::guard('designer')->user()->id;
        $paymentList = Payment::where('designer_id', $designer_id)->where('sector_type', 1)->orderBy('id', 'desc')->paginate(10);
        return view('designer.payment.paymentList')->with(compact('paymentList'));

    }


    function withdrawalRequestList()
    {
        $withdrawalList = Withdrawal::where('status', 0)->orderBy('id', 'desc')->paginate(10);;
        return view('designer.withdrawal.withdrawalRequestList')->with(compact('withdrawalList'));
    }

    function withdrawalRequestCompleted()
    {
        $withdrawalList = Withdrawal::where('status', 1)->orderBy('id', 'desc')->paginate(10);
        return view('designer.withdrawal.withdrawalCompletedList')->with(compact('withdrawalList'));
    }
}
