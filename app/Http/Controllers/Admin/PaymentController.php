<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\MeetingCreateMail;
use App\Mail\OrderCompleteMail;
use App\Mail\ProjectMilestoneMail;
use App\Mail\UserMailVerification;
use App\Models\Admin;
use App\Models\Designer;
use App\Models\DesignerAppointmentList;
use App\Models\DesignerProject;
use App\Models\DesignerProjectMilestonePayment;
use App\Models\Notification;
use App\Models\NotificationDeviceToken;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Payment;
use App\Models\Shopkeeper;
use App\Models\ShopOrder;
use App\Models\User;
use App\Models\Withdrawal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cart;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\Array_;

class PaymentController extends Controller
{
    public function pendingWithdrawalList()
    {
        $common_data = new Array_();
        $common_data->title = "Pending Withdrawal List";
        $withdrawalList = Withdrawal::where('status', 0)->get();

        return view('admin.payment.pendingWithdrawalList')->with(compact('withdrawalList', 'common_data'));
    }

    public function completedWithdrawalList()
    {
        $common_data = new Array_();
        $common_data->title = "completed Withdrawal List";
        $withdrawalList = Withdrawal::where('status', 1)->get();
        return view('admin.payment.completedWithdrawalList')->with(compact('withdrawalList', 'common_data'));

    }

    public function withdrawalCompleted(Request $request)
    {
        $adminId = Auth::guard('admin')->user()->id;
        $withdrawal = Withdrawal::find($request->withdrawal_id);
        $withdrawal->status = 1;
        $withdrawal->withdrawal_accept_by = $adminId;
        $withdrawal->withdrawal_accept_date = Carbon::now();
        $withdrawal->save();
        return redirect()->back()->with('success', 'successfully withdrawal completed ');
    }

    public function successPayment(Request $request)
    {
        if ($request->Result == 'CAPTURED') {
            if ($request->type == 'meeting') {
                $paymentId = $request->OrderID;
                $paymentInfo = Payment::where('id', $request->OrderID)->first();
                $paymentInfo->trn_id = $request->TranID;
                $paymentInfo->payment_status = 1;
                $paymentInfo->payment_id = $request->PaymentID;
                $paymentInfo->result = $request->Result;
                $paymentInfo->post_date = $request->PostDate;
                $paymentInfo->ref = $request->Ref;
                $paymentInfo->track_id = $request->TrackID;
                $paymentInfo->order_id = $request->OrderID;
                $paymentInfo->cust_ref = $request->cust_ref;
                $paymentInfo->trn_udf = $request->trnUdf;
                $paymentInfo->save();
                $appointment = DesignerAppointmentList::find($paymentInfo->meeting_id);
                $appointment->payment_status = 1;
                $appointment->payment_id = $paymentInfo->id;
                $appointment->save();

                $designerId = $appointment->designer_id;

                //Notification
                $token = NotificationDeviceToken::where('user_type', 'designer')->where('user_id', $designerId)->pluck('token');

                $title = "Designer Muse New Meeting";
                $body = "A new Meeting has been created";

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
                //mail


                return redirect()->intended('user/my/meeting/list')->with('success', 'Successfully payment completed');
            }
            if ($request->type == 'project') {
                $paymentId = $request->OrderID;
                $paymentInfo = Payment::where('id', $paymentId)->first();
                $paymentInfo->trn_id = $request->TranID;
                $paymentInfo->payment_status = 1;
                $paymentInfo->payment_id = $request->PaymentID;
                $paymentInfo->result = $request->Result;
                $paymentInfo->post_date = $request->PostDate;
                $paymentInfo->ref = $request->Ref;
                $paymentInfo->track_id = $request->TrackID;
                $paymentInfo->order_id = $request->OrderID;
                $paymentInfo->cust_ref = $request->cust_ref;
                $paymentInfo->trn_udf = $request->trnUdf;
                $paymentInfo->save();
                $milestone = DesignerProjectMilestonePayment::find($paymentInfo->project_milestone_id);
                $milestone->payment_id = $paymentInfo->id;
                $milestone->payment_status = 1;
                $milestone->status = 1;
                $milestone->save();
                $projectId = $paymentInfo->project_id;
                $designerId = $paymentInfo->designer_id;

                $project = DesignerProject::find($projectId);
                $projectSi = $project->meetingInfo->id_no;
                $totalPaid = $project->total_paid + $paymentInfo->total_amount;
                $project->total_paid = $totalPaid;
                $project->save();
                //Notification
                $token = NotificationDeviceToken::where('user_type', 'designer')->where('user_id', $designerId)->pluck('token');
                $adminToken = NotificationDeviceToken::where('user_type', 'admin')->pluck('token');

                $title = "Designer Muse New Project Milestone Payment";
                $body = "Project Id:#" . $projectSi . " Milestone $" . $paymentInfo->total_amount . "Payment Completed ";

                sendNotification($title, $body, $token);
                sendNotification($title, $body, $adminToken);
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
                //mail
                return redirect()->intended('user/project/details?project_id=' . $projectId)->with('success', 'Successfully payment completed');

            }

            if ($request->type == 'shop') {
                $paymentId = $request->OrderID;
                $paymentInfo = Payment::where('id', $paymentId)->first();
                $paymentInfo->trn_id = $request->TranID;
                $paymentInfo->payment_status = 1;
                $paymentInfo->payment_id = $request->PaymentID;
                $paymentInfo->result = $request->Result;
                $paymentInfo->post_date = $request->PostDate;
                $paymentInfo->ref = $request->Ref;
                $paymentInfo->track_id = $request->TrackID;
                $paymentInfo->order_id = $request->OrderID;
                $paymentInfo->cust_ref = $request->cust_ref;
                $paymentInfo->trn_udf = $request->trnUdf;
                $paymentInfo->save();

                $orderId = $paymentInfo->shop_order_id;
                $shoporder = Order::find($orderId);
                $shoporder->payment_status = 1;
                $shoporder->trn_id = $request->TranID;
                $shoporder->payment_id = $paymentInfo->id;
                $shoporder->save();

                ShopOrder::where('order_id', $orderId)->update(['payment_status' => 1]);
                OrderDetails::where('order_id', $orderId)->update(['payment_status' => 1]);


                //Notification
                $shopIdList = ShopOrder::where('order_id', $orderId)->where('payment_status', 1)->get()->pluck('shop_id');

                $token = NotificationDeviceToken::where('user_type', 'shopKeeper')->whereIn('user_id', $shopIdList)->pluck('token');
                $title = "Designer Muse New Order";
                $body = "A new order has been created";
                sendNotification($title, $body, $token);

                //Notification

                //mail
                $shop = Shopkeeper::whereIn('id', $shopIdList)->get();
                //Notification Store
                foreach ($shop as $shoplist) {
                    Notification::create(["user_type" => 3, "user_id" => $shoplist->id, "title" => $title, "body" => $body]);
                }
                //Notification Store

                if ($shop) {
                    foreach ($shop as $list) {
                        $details = [
                            'name' => $list->name,
                        ];
                        Mail::to($list->email)->send(new OrderCompleteMail($details));
                    }
                }
                //mail
                Cart::destroy();
                return redirect()->intended('user/my/order/list')->with('success', 'Successfully payment completed');
            }
        } else {
            if ($request->type == 'meeting') {
                $paymentId = $request->OrderID;
                $paymentInfo = Payment::where('id', $paymentId)->first();
                $appointment = DesignerAppointmentList::find($paymentInfo->meeting_id);
                $appointment->delete();
                $paymentInfo->delete();
            }
            return redirect()->intended('/')->with('error', 'Payment Processing Errors ');
        }

    }


}
