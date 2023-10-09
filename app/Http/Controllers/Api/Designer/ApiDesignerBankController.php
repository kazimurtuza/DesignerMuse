<?php

namespace App\Http\Controllers\Api\Designer;

use App\Http\Controllers\Controller;
use App\Models\BankAccount;
use App\Models\Payment;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiDesignerBankController extends Controller
{
    public function createAccount(Request $request){
        $userId = auth()->user()->id;
        $bank=new BankAccount();
        $bank->sector=1; /*1=designer*/
        $bank->user_id=$userId;
        $bank->bank_name=$request->bank_name;
        $bank->acc_name=$request->acc_name;
        $bank->acc_number=$request->acc_number;
        $bank->routing_number=$request->routing_number;
        $bank->save();
         $data = [
            'status' => 200,
            'message' => 'Service Rate Successfully Updated',
            'data' => $bank,
        ];
        return response()->json($data);
    }

   public function bankList(){
       $userId = auth()->user()->id;
       $bank=BankAccount::where('user_id',$userId)->where('sector',1)->paginate(10);
        $data = [
           'status' => 200,
           'message' => '',
           'data' => $bank,
       ];
       return response()->json($data);
   }

   public function balanceInfo(){
       $designer_id = auth()->user()->id;
       $totalCashIn = Payment::where('sector_type', 1)->where('designer_id', $designer_id)->sum('total_amount');
       $totalServiceCharge=Payment::where('sector_type', 1)->where('designer_id', $designer_id)->sum('service_charge_amount');
       $allWithdrawal = Withdrawal::where('sector_type', 1)->where('designer_id', $designer_id)->get();
       $totalCashOut = $allWithdrawal->sum('withdrawal_amount');
       $totalCompletedWithdrawal = Withdrawal::where('sector_type', 1)->where('status', 1)->where('designer_id', $designer_id)->sum('withdrawal_amount');
       $availableBalance = $totalCashIn - $totalCashOut-$totalServiceCharge;

        $data = [
           'status' => 200,
           'availableBalance' => $availableBalance,
           'totalCompletedWithdrawal' => $totalCompletedWithdrawal,
       ];
       return response()->json($data);

   }

}
