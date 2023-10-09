<?php

namespace App\Http\Controllers\Api\Designer;

use App\Http\Controllers\Controller;
use App\Models\BankAccount;
use App\Models\Payment;
use App\Models\Withdrawal;
use Carbon\Carbon;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiDesignerWithdrawal extends Controller
{
    public function withdrawalAllList(Request $request){
      $designerId= auth()->user()->id;
      return Withdrawal::where('designer_id',$designerId)->orderBy('id','desc')->paginate(10);
    }

    public function withdrawalPendingList(Request $request){
        $designerId= auth()->user()->id;
        return Withdrawal::where('designer_id',$designerId)->where('status',0)->orderBy('id','desc')->paginate(10);
    }

    public function withdrawalCompleteList(Request $request){
        $designerId= auth()->user()->id;
        return Withdrawal::where('designer_id',$designerId)->where('status',1)->orderBy('id','desc')->paginate(10);
    }

    public function withdrawalRequest(Request $request){
        $bankId=$request->bank_id;
        $bankInfo=BankAccount::find($bankId);
        $designer_id = auth()->user()->id;
        $totalCashIn = Payment::where('sector_type', 1)->where('designer_id', $designer_id)->sum('total_amount');
        $totalCashOut = Withdrawal::where('sector_type', 1)->where('designer_id', $designer_id)->sum('withdrawal_amount');
        $availableBalance = $totalCashIn - $totalCashOut;
        if ($request->balance > $availableBalance) {
            $data = [
                'status' => 400,
                'message' => 'Insufficient Balance',
            ];
            return response()->json($data,400);
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

            $data = [
                'status' => 200,
                'message' => 'Successfully Withdrawal Request Submitted',
            ];
            return response()->json($data,200);
        }
    }
}
