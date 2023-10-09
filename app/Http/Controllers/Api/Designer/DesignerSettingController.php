<?php

namespace App\Http\Controllers\Api\Designer;

use App\Http\Controllers\Controller;
use App\Models\DesignerServiceRate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DesignerSettingController extends Controller
{
    function designerServiceRate(Request $request)
    {
        $designerId = auth()->user()->id;
        return DesignerServiceRate::where('designer_id', $designerId)->first();
    }

    function designerServiceRateUpdate(Request $request)
    {
        $designerId = auth()->user()->id;
        $designerInfo = DesignerServiceRate::where('designer_id', $designerId)->first();
        if ($designerInfo) {
            $service = $designerInfo;
        } else {
            $service = new DesignerServiceRate();
        }
        $service->designer_id = $designerId;
        if (isset($request->active_time_schedule)) {
            $service->active_time_schedule = $request->active_time_schedule;
        } else {
            $service->call_rate = $request->call_rate;
            $service->video_rate = $request->video_rate;
            $service->online_rate = $request->online_rate;
        }
        $service->save();
        $data = [
            'status' => 200,
            'message' => 'Service Rate Successfully Updated',
            'data' => $service,
        ];
        return response()->json($data);

    }
}
