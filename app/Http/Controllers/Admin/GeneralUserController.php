<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Array_;

class GeneralUserController extends Controller
{

    public function userList(){
        $common_data = new Array_();
        $common_data->title ="General User List";
        $userList=User::where('is_authentic',1)->get();
        return view('admin.generalUser.general_user_list')->with(compact('userList','common_data'));
    }
}
