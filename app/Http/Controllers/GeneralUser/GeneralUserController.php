<?php

namespace App\Http\Controllers\GeneralUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GeneralUserController extends Controller
{
    public function generalUserDashboard(){
        return view('general_user.index');
    }

}
