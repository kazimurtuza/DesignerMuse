<?php

namespace App\Http\Controllers;

use App\Http\Resources\AboutOusResource;
use App\Http\Resources\howItworkResource;
use App\Models\AboutOus;
use App\Models\HowItWork;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function aboutOus()
    {
        $about = new AboutOusResource(AboutOus::first());
        $info = response()->json($about);
        $aboutOus = $info->getData();
        return view('frontend.page.aboutOus')->with(compact('aboutOus'));
    }

    public function howWeWork(Request $request)
    {
        $work = new HowItworkResource(HowItWork::where('type',$request->type)->first());
        $info = response()->json($work);
        $howItWork = $info->getData();
        return view('frontend.page.howItWork')->with(compact('howItWork'));
    }
}
