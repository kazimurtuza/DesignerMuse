<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Designer;
use App\Models\Shopkeeper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\Array_;

class UserRegistrationController extends Controller
{
    public function designerRegistration(){
        $common_data = new Array_();
        $common_data->title ="New Designer Add";
        $designerList=Designer::get();
        return view('admin.registration.designer_registration')->with(compact('designerList','common_data'));
    }

    public function shopRegistration(){
        $common_data = new Array_();
        $common_data->title ="New Shop Add";
        $designerList=Shopkeeper::get();
        return view('admin.registration.shop_registration')->with(compact('designerList'));
    }

    public function editUser(Request $request)
    {

        if ($request->user_type == 'shopkeeper') {
            $shop=Shopkeeper::find($request->id);
            $shop->name=$request->name;
            $shop->email=$request->email;
            if($request->password){
                $shop->password=Hash::make($request->password);
            }
            $shop->save();
            return redirect()->back()->with('success','Successfully shop info updated');
        }

        if ($request->user_type == 'designer') {
            $designer=Designer::find($request->id);
            $designer->name=$request->name;
            $designer->email=$request->email;
            if($request->password){
                $designer->password=Hash::make($request->password);
            }
            $designer->save();
            return redirect()->back()->with('success','Successfully designer info updated');

        }

    }
}
