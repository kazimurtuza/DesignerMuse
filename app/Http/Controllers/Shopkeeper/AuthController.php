<?php

namespace App\Http\Controllers\Shopkeeper;

use App\Http\Controllers\Controller;
use App\Models\NotificationDeviceToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
      public function shopkeeperLogout(){
          $shopUserinfo= Auth::guard('shopkeeper')->user();
          NotificationDeviceToken::where('user_type',$shopUserinfo->user_type)->where('user_id',$shopUserinfo->id)->delete();

         $shopUser= Auth::guard('shopkeeper')->user();
         Auth::guard('shopkeeper')->logout($shopUser);
         return redirect()->intended('/')->with('success','Successfully Logout');
      }
}
