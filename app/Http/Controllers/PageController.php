<?php

namespace App\Http\Controllers;

use App\Http\Resources\AboutOusResource;
use App\Http\Resources\AdminProjectResource;
use App\Http\Resources\howItworkResource;
use App\Http\Resources\TeamMemberResource;
use App\Models\AboutOus;
use App\Models\AdminProjectList;
use App\Models\HowItWork;
use App\Models\TeamMemberList;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function aboutOus()
    {
        $about = new AboutOusResource(AboutOus::first());
        $info = response()->json($about);
         $aboutOus = $info->getData();
        $projectData = AdminProjectResource::collection(AdminProjectList::where('status', 1)->get());
        $projectInfo = response()->json($projectData);
        $project = $projectInfo->getData();

        $teamInfo = TeamMemberResource::collection(TeamMemberList::where('status', 1)->get());
        $infoMember = response()->json($teamInfo);
        $team = $infoMember->getData();
        return view('frontend.page.aboutOus')->with(compact('aboutOus', 'team', 'project'));
    }

    public function howWeWork(Request $request)
    {
        $work = new HowItworkResource(HowItWork::where('type', $request->type)->first());
        $info = response()->json($work);
        $howItWork = $info->getData();
        return view('frontend.page.howItWork')->with(compact('howItWork'));
    }
}
