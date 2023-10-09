<?php

namespace App\Http\Controllers\ShopKeeper;

use App\Http\Controllers\Controller;
use App\Models\BankAccount;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Payment;
use App\Models\Withdrawal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BankBalanceController extends Controller
{
    public function bankAccount(){
         $userId =Auth::guard('shopkeeper')->user()->id;
         $bankList=BankAccount::where('user_id',$userId)->where('sector',2)->where('is_active',1)->get();
         return view('shopkeeper.bankBalance.bankList')->with(compact('bankList'));
    }
    public function bankAccountStore(Request $request){
        $userId = Auth::guard('shopkeeper')->user()->id;
        $bank=new BankAccount();
        $bank->sector=2; /*1=designer 2=Shopkeeper*/
        $bank->user_id=$userId;
        $bank->bank_name=$request->bank_name;
        $bank->acc_name=$request->acc_name;
        $bank->is_active=1;
        $bank->acc_number=$request->acc_number;
        $bank->routing_number=$request->routing_number;
        $bank->save();
        return redirect()->back()->with('success','Successfully Bank Account Created');

    }


    function bankBalance()
    {
        $shop_id = Auth::guard('shopkeeper')->user()->id;
        $totalCashIn = OrderDetails::where('shop_id',$shop_id)->where('payment_status',1)->sum('total_payable');
        $totalServiceCharge=OrderDetails::where('shop_id',$shop_id)->where('payment_status',1)->sum('service_charge');
        $withdrawal = Withdrawal::where('sector_type', 2)->where('shopkeeper_id', $shop_id)->orderBy('id', 'desc')->take(5)->get();
        $allWithdrawal = Withdrawal::where('sector_type', 2)->where('shopkeeper_id', $shop_id)->get();
        $totalCashOut = $allWithdrawal->sum('withdrawal_amount');
        $totalCompletedWithdrawal = Withdrawal::where('sector_type', 2)->where('status', 1)->where('designer_id', $shop_id)->sum('withdrawal_amount');
        $availableBalance = $totalCashIn - $totalCashOut-$totalServiceCharge;
        $bankList = BankAccount::where('user_id', $shop_id)->where('sector', 2)->get();
        return view('shopkeeper.bankBalance.balanceWithdrawal')->with(compact('availableBalance', 'totalCompletedWithdrawal', 'withdrawal', 'bankList'));
    }

    function withdrawalRequest(Request $request)
    {
        $bankId=$request->bank_id;
        $bankInfo=BankAccount::find($bankId);
        $shop_id = Auth::guard('shopkeeper')->user()->id;
        $totalCashIn = OrderDetails::where('shop_id',$shop_id)->where('payment_status',1)->sum('total_payable');
        $totalServiceCharge=OrderDetails::where('shop_id',$shop_id)->where('payment_status',1)->sum('service_charge');
        $allWithdrawal = Withdrawal::where('sector_type', 2)->where('shopkeeper_id', $shop_id)->get();
        $totalCashOut = $allWithdrawal->sum('withdrawal_amount');
        $availableBalance = $totalCashIn - $totalCashOut-$totalServiceCharge;
        if ($request->balance > $availableBalance) {
            return redirect()->back()->with('error', 'insufficient balance in your account');
        } else {
            $withdrawal = new Withdrawal();
            $withdrawal->sector_type = 2;
            $withdrawal->withdrawal_amount = $request->balance;
            $withdrawal->shopkeeper_id = $shop_id;
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
}
