<?php

namespace App\Http\Controllers\Api\Designer;

use App\Http\Controllers\Controller;
use App\Models\DesignerServiceRate;
use App\Models\DesignerServiceTime;
use App\Models\TimeSlot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimeSlotController extends Controller
{
    public function timeslotList(){
         $designerId = auth()->user()->id;
         $duration=DesignerServiceRate::where('designer_id',$designerId)->first()->active_time_schedule;
         $timeslot=TimeSlot::where('duration_minutes',$duration)->get();
         return response()->json($timeslot) ;
    }

    public function designerScheduleStore(Request $request)
    {
        $designer = auth()->user()->id;
        $startDate = $request->start_date;
        $endDate = $request->end_date;
        $slots = json_encode($request->selected_slot);

        $existDate = DesignerServiceTime::where('designer_id', $designer)->whereBetween('date', [$startDate, $endDate])->pluck('date');
        $existDateArray =  json_decode(json_encode($existDate), true);
        $alreadyExist = [];
        while (strtotime($startDate) <= strtotime($endDate)) {
            $date = new \DateTime($startDate);
            $date->modify('+1 day');
            $selectedDate = $date->format('Y-m-d');
            $result = in_array($startDate, $existDateArray);
            if($result){
                array_push($alreadyExist,$startDate);
            }
            else{
                $service=new DesignerServiceTime();
                $service->designer_id=$designer;
                $service->date=$startDate;
                $service->slot_duration=$request->time_duration;
                $service->active_slot_id=$slots;
                $service->save();
            }
            $startDate = $selectedDate;
        }
        $data = [
            'status' => 200,
            'message' => 'Time slot Successfully updated',
            'alreadyExistDate' => $alreadyExist,
        ];
        return response()->json($data);

    }
}
