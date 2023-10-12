<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiAboutUsResource;
use App\Http\Resources\ApiHowItWorkResource;
use App\Http\Resources\HowItworkResource;
use App\Models\AboutOus;
use App\Models\HowItWork;
use Illuminate\Http\Request;

class ApiPageController extends Controller
{

    function howItWork(Request $request)
    {
        $type=$request->type;
        if(!$type){
            $type=$type;
        }
        return new ApiHowItWorkResource(HowItWork::where('type',$type)->first());
    }

    function aboutUs(Request $request)
    {
        return new ApiAboutUsResource(AboutOus::first());
    }
}
