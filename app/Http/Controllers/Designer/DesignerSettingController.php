<?php

namespace App\Http\Controllers\Designer;

use App\Http\Controllers\Controller;
use App\Models\DesignerAppointmentList;
use App\Models\DesignerServiceRate;
use App\Models\DesignerServiceTime;
use App\Models\TimeSlot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\While_;

class DesignerSettingController extends Controller
{
    public function timeSetting()
    {
        $designer = Auth::guard('designer')->user();
        $designerInfo = DesignerServiceRate::where('designer_id', $designer->id)->first();
        return view('designer.setting.setting')->with(compact('designerInfo'));
    }

    public function timeScheduleList()
    {
        $designer = Auth::guard('designer')->user();
        $scheduleList = DesignerServiceTime::with('bookedList')->where('designer_id', $designer->id)->orderBy('id', 'desc')->get();
        return view('designer.schedule.scheduleList')->with(compact('scheduleList'));

    }

    public function timeSchedule()
    {
        $designer = Auth::guard('designer')->user();
        $activeTimeRange = DesignerServiceRate::where('designer_id', $designer->id)->first()->active_time_schedule;
        return view('designer.setting.timeSchedule')->with(compact('activeTimeRange'));
    }

    public function timeScheduleCreate(Request $request)
    {
        $time = (24 * 60 * 60);
        $duration = $request->time_duration * 60;
        $startTime = 0;
        $timeArray = [];
        $timeSecondArray = [];

        while ($time >= $startTime) {
            $timeSlot = date("g:i a", $startTime);
            $timeArray[] = $timeSlot;
            $timeSecondArray[] = $startTime;
            $startTime += $duration;
        }
        $totalKey = sizeof($timeArray) - 1;

        foreach ($timeArray as $key => $item) {

            if ($totalKey > $key) {
                $nextKey = $key + 1;
            } else {
                $nextKey = $key;
            }

            $slot = new TimeSlot();
            $slot->start_time = $item;
            $slot->end_time = $timeArray[$nextKey];
            $slot->duration_minutes = $request->time_duration;
            $slot->start_seconds = $timeSecondArray[$key];
            $slot->end_seconds = $timeSecondArray[$nextKey];
            $slot->save();
        }
        return 'success';
    }

    public function timeSlotGet(Request $request)
    {
        $slotList = TimeSlot::where('duration_minutes', $request->duration)->get();
        return view('designer.schedule._get_slot')->with(compact('slotList'))->render();
    }

    public function designerSlotStore(Request $request)
    {
        $designer = Auth::guard('designer')->user();
        $startDate = $request->start_date;
        $endDate = $request->end_date;
        $slots = json_encode($request->selected_slot);

        $axisDate = DesignerServiceTime::where('designer_id', $designer->id)->whereBetween('date', [$startDate, $endDate])->pluck('date');
        $axisDateArray = $array = json_decode(json_encode($axisDate), true);
        $alreadyExist = [];
        while (strtotime($startDate) <= strtotime($endDate)) {
            $date = new \DateTime($startDate);
            $date->modify('+1 day');
            $selectedDate = $date->format('Y-m-d');
            $result = in_array($startDate, $axisDateArray);
            if($result){
                array_push($alreadyExist,$startDate);
            }
            else{
                $service=new DesignerServiceTime();
                $service->designer_id=$designer->id;
                $service->date=$startDate;
                $service->slot_duration=$request->time_duration;
                $service->active_slot_id=$slots;
                $service->save();
            }
            $startDate = $selectedDate;
        }

        return redirect()->back()->with('success', 'successfully created time  schedule');

    }


    public function designerServiceRate(Request $request)
    {
        $designer = Auth::guard('designer')->user();

        $designerInfo = DesignerServiceRate::where('designer_id', $designer->id)->first();
        if ($designerInfo) {
            $service = $designerInfo;
        } else {
            $service = new DesignerServiceRate();
        }
        $service->designer_id = $designer->id;
        if (isset($request->active_time_schedule)) {
            $service->active_time_schedule = $request->active_time_schedule;
        } else {
            $service->call_rate = $request->call_rate;
            $service->video_rate = $request->video_rate;
            $service->online_rate = $request->online_rate;

        }
        $service->save();
        return redirect()->back()->with('success', 'successfully updated service Setting');
    }

    public function timeScheduleEdit(Request $request)
    {
        $scheduleDetail = DesignerServiceTime::find($request->service_time_id);
        $designer = Auth::guard('designer')->user();
        $bookedSlot = DesignerAppointmentList::where('designer_id', $designer->id)->where('service_time_id', $request->service_time_id)->pluck('time_slot_id');
        $activeTimeRange = $scheduleDetail->slot_duration;
        $activeSlot = $scheduleDetail->active_slot_id;
        $slotList = TimeSlot::where('duration_minutes', $scheduleDetail->slot_duration)->get();
        return view('designer.schedule.editTimeSchedule')->with(compact('activeTimeRange', 'scheduleDetail', 'bookedSlot', 'activeSlot', 'slotList'));
    }

    public function timeScheduleUpdate(Request $request)
    {
        $scheduleUpdate = DesignerServiceTime::find($request->schedule_slot_id);
        $scheduleUpdate->active_slot_id = json_encode($request->selected_slot);
        $scheduleUpdate->save();
        return redirect()->back()->with('success', 'Time schedule Successfully Updated ');
    }
}
