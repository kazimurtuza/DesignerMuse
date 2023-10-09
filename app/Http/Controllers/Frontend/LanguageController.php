<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class LanguageController extends Controller
{
    public function languageSet(){

        $info=Session::get('language');
        if($info=='en'){
            Session::put('language', 'ar');
        }elseif($info=='ar'){
            Session::put('language', 'en');
        }else{
            Session::put('language', 'en');
        }
        return redirect()->back();

    }
}
