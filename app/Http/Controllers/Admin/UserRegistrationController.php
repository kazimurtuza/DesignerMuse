<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Designer;
use App\Models\Shopkeeper;
use Illuminate\Http\Request;

class UserRegistrationController extends Controller
{
    public function designerRegistration(){
        $designerList=Designer::get();
        return view('admin.registration.designer_registration')->with(compact('designerList'));
    }

    public function shopRegistration(){
        $designerList=Shopkeeper::get();
        return view('admin.registration.shop_registration')->with(compact('designerList'));
    }
}
