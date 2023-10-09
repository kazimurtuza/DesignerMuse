<?php

namespace App\Http\Controllers;

use App\Http\Resources\howItworkResource;
use App\Models\HowItWork;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function aboutOus()
    {
        return view('frontend.page.aboutOus');
    }

    public function howWeWork(Request $request)
    {
        $work = new HowItworkResource(HowItWork::first());
        $info = response()->json($work);
             $howItWork = $info->getData();
        return view('frontend.page.howItWork')->with(compact('howItWork'));
    }
}
