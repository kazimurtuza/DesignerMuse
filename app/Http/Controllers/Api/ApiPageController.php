<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AdminProjectResource;
use App\Http\Resources\ApiAboutUsResource;
use App\Http\Resources\ApiHowItWorkResource;
use App\Http\Resources\HowItworkResource;
use App\Http\Resources\TeamMemberResource;
use App\Models\AboutOus;
use App\Models\AdminProjectList;
use App\Models\HowItWork;
use App\Models\TeamMemberList;
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
    public function memberList(Request $request){
        return  TeamMemberResource::collection(TeamMemberList::get());
    }
    public function adminProjectList(Request $request){
        return  AdminProjectResource::collection(AdminProjectList::get());
    }
}
