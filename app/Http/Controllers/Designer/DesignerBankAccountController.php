<?php

namespace App\Http\Controllers\Designer;

use App\Http\Controllers\Controller;
use App\Models\BankAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DesignerBankAccountController extends Controller
{
    public function bankAccount(){
        $userId = $designer = Auth::guard('designer')->user()->id;
        $bankList=BankAccount::where('user_id',$userId)->where('sector',1)->get();
        return view('designer.bank.bankAccount')->with(compact('bankList'));
    }
    public function bankAccountStore(Request $request){
        $userId = Auth::guard('designer')->user()->id;
        $bank=new BankAccount();
        $bank->sector=1; /*1=designer 2=Shopkeeper*/
        $bank->user_id=$userId;
        $bank->bank_name=$request->bank_name;
        $bank->acc_name=$request->acc_name;
        $bank->acc_number=$request->acc_number;
        $bank->routing_number=$request->routing_number;
        $bank->save();
        return redirect()->back()->with('success','Successfully Bank Account Created');

    }

}
