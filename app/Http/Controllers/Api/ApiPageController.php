<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HowItworkResource;
use App\Models\HowItWork;
use Illuminate\Http\Request;

class ApiPageController extends Controller
{

    function howItWork(){
//        HowItWork::get()
      return   HowItworkResource::make(HowItWork::first());
//        return  (HowItWork::get());
    }
}
