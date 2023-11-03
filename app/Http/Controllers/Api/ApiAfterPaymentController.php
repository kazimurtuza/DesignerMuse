<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\MeetingCreateMail;
use App\Mail\ProjectMilestoneMail;
use App\Models\Admin;
use App\Models\Designer;
use App\Models\DesignerAppointmentList;
use App\Models\DesignerProjectMilestonePayment;
use App\Models\Notification;
use App\Models\NotificationDeviceToken;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApiAfterPaymentController extends Controller
{
    public function meetingPaymentSuccess(Request $request)
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
            $paymentInfo->cust_ref = $request->cust_ref;
            $paymentInfo->trn_udf = $request->trnUdf;
            $paymentInfo->payment_status = 1;
            $paymentInfo->save();

            $appointment = DesignerAppointmentList::find($paymentInfo->meeting_id);
            $appointment->payment_status = 1;
            $appointment->payment_id = $paymentInfo->id;
            $appointment->save();

            $designerId = $appointment->designer_id;

            //Notification

            $title = "Designer Muse New Meeting";
            $body = "A new Meeting has been created";

            $token = NotificationDeviceToken::where('user_type', 'designer')->where('user_id', $designerId)->pluck('token');
            sendNotification($title, $body, $token);
            Notification::create(['user_type' => 2, 'user_id' => $designerId, 'title' => $title, 'body' => $body]);

            //Notification

            //mail
            $designerData = Designer::find($designerId);
            if ($designerData->email) {
                $details = [
                    'name' => $designerData->name,
                ];
                Mail::to($designerData->email)->send(new MeetingCreateMail($details));
            }

            $data = [
                'status' => 200,
                'message' => "Successfully Payment Completed",
            ];
            return response()->json($data);
            //mail


        } else {
            $data = [
                'status' => 400,
                'message' => "Payment uncompleted",
            ];
            return response()->json($data);
        }
    }

    public function milestonePaymentSuccess(Request $request)
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
            $paymentInfo->cust_ref = $request->cust_ref;
            $paymentInfo->trn_udf = $request->trnUdf;
            $paymentInfo->payment_status = 1;
            $paymentInfo->save();

            $milestone = DesignerProjectMilestonePayment::find($paymentInfo->project_milestone_id);
            $milestone->payment_id = $paymentInfo->id;
            $milestone->payment_status = 1;
            $milestone->status = 1;
            $milestone->save();
            $projectId = $paymentInfo->project_id;
            $designerId = $paymentInfo->designer_id;
            //Notification

            $title = "Designer Muse New Project Milestone Payment";
            $body = "A new Project Milestone Payment Completed";
            $token = NotificationDeviceToken::where('user_type', 'designer')->where('user_id', $designerId)->pluck('token');
            $tokenAdmin = NotificationDeviceToken::where('user_type', 'admin')->pluck('token');

            sendNotification($title, $body, $token);
            sendNotification($title, $body, $tokenAdmin);
            Notification::create(['user_type' => 2, 'user_id' => $designerId, 'title' => $title, 'body' => $body]);
            //mail
            $designerData = Designer::find($designerId);
            if ($designerData->email) {
                $details = [
                    'name' => $designerData->name,
                ];
                Mail::to($designerData->email)->send(new ProjectMilestoneMail($details));
            }
            $adminMail = Admin::get();
            if ($adminMail) {
                //Notification Store
                foreach ($adminMail as $admin) {
                    Notification::create(['user_type' => 1, 'user_id' => $admin->id, 'title' => $title, 'body' => $body]);
                }
                //Notification Store

                foreach ($adminMail as $adminList) {
                    $details = [
                        'name' => $adminList->name,
                    ];
                    Mail::to($adminList->email)->send(new ProjectMilestoneMail($details));
                }
            }
            $data = [
                'status' => 200,
                'message' => "Successfully Payment Completed",
            ];
            return response()->json($data);
            //mail
        } else {
            $data = [
                'status' => 400,
                'message' => "Payment uncompleted",
            ];
            return response()->json($data);
        }
    }
}
