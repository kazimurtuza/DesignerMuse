<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class GeneralUserController extends Controller
{
    public function userList(){
        $userList=User::where('is_authentic',1)->get();
        return view('admin.generalUser.general_user_list')->with(compact('userList'));
    }
}
