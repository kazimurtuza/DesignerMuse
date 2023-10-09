<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DesignerMeetingDateResource;
use App\Http\Resources\MeetingResource;
use App\Models\AdminSetting;
use App\Models\DesignerAppointmentList;
use App\Models\DesignerProjectMilestonePayment;
use App\Models\DesignerServiceRate;
use App\Models\Payment;
use App\Models\TimeSlot;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpMyAdmin\Config\Settings;

class UserMeetingController extends Controller
{
    public function meetingBooked(Request $request)
    {
        $validator = $request->validate([
            'date' => ['required'],
            'designer_id' => ['required'],
            'slot_id' => ['required'],
            'service_time_id' => ['required'],
            'package_type' => ['required'],
        ]);
            $exist = DesignerAppointmentList::where('time_slot_id', $request->slot_id)
                ->where('appointment_date', $request->date)
                ->where('designer_id', $request->designer_id)
                ->where('payment_status', 1)
                ->where('service_time_id', $request->service_time_id)
                ->first();

            if ($exist) {
                return $data = [
                    'status' => 400,
                    'message' => 'Already Booked',
                ];
            }
            $user = auth('sanctum')->user();
            $userId = $user->id;
            $user->meeting_charge_rate;
            $meetingValue = 0;
            $serviceRate = DesignerServiceRate::where('designer_id', $request->designer_id)->first();

            $serviceChargeRate = .01;
            $settingCharge = AdminSetting::first();
            $serviceChargeRate = $settingCharge->meeting_charge_rate;
            if ($user->meeting_charge_rate) {
                $serviceChargeRate = $user->meeting_charge_rate;
            }

            if ($request->package_type == 'voice') {
                $meetingValue = $serviceRate->call_rate;
            }
            if ($request->package_type == 'video') {
                $meetingValue = $serviceRate->video_rate;
            }
            if ($request->package_type == 'office') {
                $meetingValue = $serviceRate->online_rate;
            }
            $totalCharge = ($meetingValue * $serviceChargeRate) / 100;

            $timeDuration = TimeSlot::find($request->slot_id)->duration_minutes;
            $date = date('Y-m-d', strtotime($request->date));
            $appointment = new  DesignerAppointmentList();
            $appointment->user_id = $userId;
            $appointment->service_time_id = $request->service_time_id;
            $appointment->designer_id = $request->designer_id;
            $appointment->appointment_date = $date;
            $appointment->time_slot_id = $request->slot_id;
            $appointment->appointment_type = $request->package_type;
            $appointment->payment_status = 0;
            $appointment->payment_id = 0;
            $appointment->save();
            $appointment->id_no = 10000 + $appointment->id;
            $appointment->save();

            $payment = new Payment();
            $payment->sector_type = 0;  /*0=designer 1=shop*/
            $payment->payment_for = 1;   /* 0=shop 1=meeting 2=project*/
            $payment->user_id = $userId;
            $payment->designer_id = $request->designer_id;
            $payment->meeting_id = $appointment->id;
            $payment->total_amount = $meetingValue;
            $payment->service_charge_amount = $totalCharge;
            $payment->date = Carbon::now();
            $payment->save();
            $payment->id_no = $payment->id + 10000;
            $payment->save();
            $paymentId=$payment->id;
            $appointment->payment_id =$paymentId ;
            $appointment->save();

            $data = [
                'status' => 200,
                'message' => 'Successfully Meeting Booked But Payment not completed',
                'payment_id' => $paymentId,
            ];
            return response()->json($data);

    }


    public function meetingPaymentResult(Request $request)
    {
        if ($request->result == 'CAPTURED') {
            $paymentId = $request->orderID;
            $paymentInfo = Payment::find($paymentId);
            $paymentInfo->trn_id = $request->tranID;
            $paymentInfo->payment_id = $request->paymentID;
            $paymentInfo->result = $request->result;
            $paymentInfo->post_date = $request->postDate;
            $paymentInfo->ref = $request->ref;
            $paymentInfo->track_id = $request->trackID;
            $paymentInfo->order_id = $request->orderID;
            $paymentInfo->payment_status = 1;
            $paymentInfo->cust_ref = $request->cust_ref;
            $paymentInfo->trn_udf = $request->trnUdf;
            $paymentInfo->save();
            $meetingId = $paymentInfo->meeting_id;

            $meeting = DesignerAppointmentList::class::find($meetingId);
            $meeting->payment_id = $paymentInfo->id;
            $meeting->payment_status = 1;
            $meeting->save();

            $data = [
                'status' => 200,
                'message' => "Successfully Meeting Payment Completed",
                'payment_id' => $paymentInfo,
            ];
            return response()->json($data);

        } else {
            $data = [
                'status' => 400,
                'message' => "internal error ",
                'payment_id' => $request->orderID,
            ];
            return response()->json($data);
        }

    }


    public function meetingList()
    {
        $user_id = auth('sanctum')->user()->id;
        return MeetingResource::collection(DesignerAppointmentList::where('user_id', $user_id)->paginate(10));
    }

    public function meetingStatusUpdate(Request $request)
    {
        $meetingInfo = DesignerAppointmentList::find($request->meeting_id);
        $meetingInfo->status = $request->status;
        $meetingInfo->save();
        $data = [
            'status' => 200,
            'message' => 'Meeting Status Updated',
            'data' => $meetingInfo,
        ];
        return response()->json($data);

    }

    public function oldMeetingList()
    {
        $user_id = auth('sanctum')->user()->id;
        return MeetingResource::collection(DesignerAppointmentList::where('user_id', $user_id)->where('status', '>', 0)->orderBy('id', 'desc')->paginate(10));
    }

    public function pendingMeetingList()
    {
        $user_id = auth('sanctum')->user()->id;
        return MeetingResource::collection(DesignerAppointmentList::where('user_id', $user_id)->where('status', '=', 0)->orderBy('id', 'desc')->paginate(10));

    }


}
