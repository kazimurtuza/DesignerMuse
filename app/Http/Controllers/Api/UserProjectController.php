<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectDetailsResource;
use App\Http\Resources\ProjectResource;
use App\Models\AdminSetting;
use App\Models\Designer;
use App\Models\DesignerAppointmentList;
use App\Models\DesignerProject;
use App\Models\DesignerProjectFile;
use App\Models\DesignerProjectMilestonePayment;
use App\Models\DesignerRatingReview;
use App\Models\Notification;
use App\Models\NotificationDeviceToken;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Payment;
use App\Models\ShopOrder;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;

class UserProjectController extends Controller
{

    public function projectStore(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'designer_id' => 'required',
        ]);

        $clientId = auth()->user()->id;
        $exist = DesignerProject::where('meeting_id', $request->meeting_id)->where('payment_status', 1)->first();
        if ($exist) {
            $data = [
                'status' => 400,
                'message' => 'Already Project Created',
            ];
            return response()->json($data);
        }
        $project = new DesignerProject();
        $project->title = $request->title;
        $project->description = $request->description;
        $project->dateline = $request->date_line;
        $project->client_id = $clientId;
        $project->designer_id = $request->designer_id;
        $project->meeting_id = $request->meeting_id;
        $projectInfo = $project->save();

        if (!empty($request->project_file)) {
            $fileData = new DesignerProjectFile();
            $fileData->project_id = $project->id;
            if (!empty($request->project_file)) {
                $file = $request->file('project_file');
                $extension = $file->getClientOriginalExtension();
                $realFilename = $file->getClientOriginalName();
                $filename = time() . '.' . $extension;
                $file->move(public_path('uploads/project'), $filename);
                $fileData->file = 'public/uploads/project/' . $filename;
                $fileData->file_name = $realFilename;
            }
            $fileData->save();
        }
        if ($projectInfo) {
            $meetingStatus = DesignerAppointmentList::find($request->meeting_id);
            $meetingStatus->status = 2;
            $meetingStatus->save();
        }


        $token = NotificationDeviceToken::where('user_type', 'designer')->where('user_id', $project->designer_id)->pluck('token');

        $title = "Designer Muse New Project  Created";
        $body = $project->title . "  Project  Created";

        sendNotification($title, $body, $token);

        Notification::create(['user_type' => 2, 'user_id' => $project->designer_id, 'title' => $title, 'body' => $body]);


        $data = [
            'status' => 200,
            'message' => 'successfully Project created',
        ];
        return response()->json($data);

    }

    public function projectCompleted(Request $request)
    {
        $info = $project = DesignerProject::find($request->project_id);
        $project->project_status = 2;
        $project->save();

        $user_id = Auth::user()->id;

        if ($request->rating) {
            $designerId = $info->designer_id;
            $designer = new DesignerRatingReview();
            $designer->designer_id = $designerId;
            $designer->project_name = $info->title;
            $designer->meeting_name = '';
            $designer->customer_id = $user_id;
            $designer->project_id = $request->project_id;
            $designer->rating = $request->rating;
            $designer->review = $request->review;
            $designer->save();
            $retingInfo = DesignerRatingReview::where('designer_id', $designerId)->get();
            $totalRateUser = $retingInfo->count();
            $totalRating = $retingInfo->sum('rating');
            $avgRating = $totalRating / $totalRateUser;

            $designerInfo = Designer::find($designerId);
            $designerInfo->rating = $avgRating;
            $designerInfo->save();
        }

        $data = [
            'status' => 200,
            'message' => 'Successfully Project Project Completed',
        ];
        return response()->json($data);

    }


    public function oldProjectList()
    {
        $userId = auth('sanctum')->user()->id;
        return ProjectResource::collection(DesignerProject::where('client_id', $userId)->where('project_status', '>', 0)->orderBy('id', 'desc')->paginate(10));
    }

    public function newProjectList()
    {
        $userId = auth('sanctum')->user()->id;
        return ProjectResource::collection(DesignerProject::where('client_id', $userId)->orderBy('id', 'desc')->paginate(10));
    }

    public function projectDetails(Request $request)
    {
        $validated = $request->validate([
            'project_id' => 'required',
        ]);
        $userId = auth('sanctum')->user()->id;
        return new ProjectDetailsResource(DesignerProject::where('client_id', $userId)->where('id', '=', $request->project_id)->first());
    }

    public function milestoneCreate(Request $request)
    {
        $validated = $request->validate([
            'project_id' => 'required',
            'title' => 'required',
            'amount' => 'required|numeric',
        ]);
        $milestone = new DesignerProjectMilestonePayment();
        $milestone->project_id = $request->project_id;
        $milestone->title = $request->title;
        $milestone->amount = $request->amount;
        $milestone->payable_date = Carbon::now();
        $milestone->save();
        $data = [
            'status' => 200,
            'message' => 'Successfully Project Milestone Created',
            'data' => $milestone,
        ];
        return response()->json($data);
    }


    public function projectRatingReviewAdd(Request $request)
    {

        $info = DesignerProject::find($request->project_id);
        $user_id = auth()->user()->id;
        $designerId = $info->designer_id;
        $ratinginfo = DesignerRatingReview::where('project_id', $request->project_id)->first();
        if ($ratinginfo) {
            $data = [
                'status' => 400,
                'message' => 'Already rating completed',
                'data' => $ratinginfo,
            ];
            return response()->json($data);
        }
        if ($user_id == $info->client_id) {
            $designer = new DesignerRatingReview();
            $designer->designer_id = $designerId;
            $designer->project_name = $info->title;
            $designer->meeting_name = '';
            $designer->customer_id = $user_id;
            $designer->project_id = $request->project_id;
//          $designer->meeting_id='';
            $designer->rating = $request->rating;
            $designer->review = $request->review;
            $designer->save();

            $retingInfo = DesignerRatingReview::where('designer_id', $designerId)->get();
            $totalRateUser = $retingInfo->count();
            $totalRating = $retingInfo->sum('rating');
            $avgRating = $totalRating / $totalRateUser;

            $designerInfo = Designer::find($designerId);
            $designerInfo->rating = $avgRating;
            $designerInfo->save();


            $data = [
                'status' => 200,
                'message' => 'Successfully Rating Review Added',
                'data' => $designer,
            ];
            return response()->json($data);

        } else {
            $data = [
                'status' => 401,
                'message' => 'you cat not rate this Project',
            ];
            return response()->json($data);
        }
    }

    public function ProjectMilestoneRelease(Request $request)
    {
        $chargeRatePrc = 0;
        $charge = AdminSetting::first();
        if ($charge) {
            $chargeRatePrc = $charge->project_charge_rate;
        }
        $userId = auth()->user()->id;
        $mileston = DesignerProjectMilestonePayment::find($request->milestone_id);
        $mileston->paid_date = Carbon::now();
        $mileston->payment_status = 0;
        $mileston->save();
        $designerId = DesignerProject::find($mileston->project_id)->designer_id;
        $designerInfo = Designer::find($designerId);
        if ($designerInfo->project_charge_rate != null) {
            $chargeRatePrc = $designerInfo->project_charge_rate;
        }
        $totalAmount = $mileston->amount;
        $service_charge = ($totalAmount * $chargeRatePrc) / 100;
        $payment = new Payment();
        $payment->sector_type = 0;  /*0=designer 1=shop*/
        $payment->payment_for = 2;   /* 0=shop 1=meeting 2=project*/
        $payment->user_id = $userId;
        $payment->designer_id = $designerId;
        $payment->project_id = $mileston->project_id;
        $payment->project_milestone_id = $mileston->id;
        $payment->total_amount = $totalAmount;
        $payment->service_charge_amount = $service_charge;
        $payment->payment_status = 0;
        $payment->date = Carbon::now();
        $payment->save();
        $paymentNo = $payment->id + 10000;
        $payment->id_no = $paymentNo;
        $payment->save();

        $data = [
            'status' => 200,
            'message' => 'success fully success',
            'order_id' => $payment->id,
        ];
        return response()->json($data);

    }

    public function milestonePaymentResult(Request $request)
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
            $milestoneId = $paymentInfo->project_milestone_id;

            $milestone = DesignerProjectMilestonePayment::class::find($milestoneId);
            $milestone->payment_id = $paymentInfo->id;
            $milestone->payment_status = 1;
            $milestone->status = 1;
            $milestone->save();

            $data = [
                'status' => 200,
                'message' => "Successfully Milestone Payment Completed",
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

    public function projectAgreementStore(Request $request)
    {
        $request->validate([
            'agreement_file' => 'required',
            'project_id' => 'required',
            'project_price' => 'required',
        ]);
        if (!empty($request->agreement_file)) {
            $info = $fileData = DesignerProject::find($request->project_id);
            $fileData->agreement_accepted = 2;
            $fileData->designer_project_comment = $request->designer_project_comment;
            $fileData->project_rate = $request->project_price;
            if (!empty($request->agreement_file)) {
                $file = $request->file('agreement_file');
                $extension = $file->getClientOriginalExtension();
                $realFilename = $file->getClientOriginalName();
                $filename = time() . '.' . $extension;
                $file->move(public_path('uploads/project'), $filename);
                $fileData->agreement_file = 'public/uploads/project/' . $filename;
                $fileData->agreement_file_name = $realFilename;
            }
            $fileData->save();
        }

        $token = NotificationDeviceToken::where('user_type', 'generalUser')->where('user_id', $info->client_id)->pluck('token');

        $title = "Designer Muse Project Agreement Created";
        $body = $info->title . "  Agreement Created";

        sendNotification($title, $body, $token);

        Notification::create(['user_type' => 2, 'user_id' => $info->client_id, 'title' => $title, 'body' => $body]);


        $data = [
            'status' => 200,
            'message' => "Successfully Project Agreement Created",
            'payment_id' => $fileData,
        ];
        return response()->json($data);
    }

    public function acceptAgreement(Request $request)
    {

        if (!$request->agreement_accept) {
            return redirect()->back()->with('error', 'Accept agreement first');
        }
        $request->validate([
            'agreement_accept' => 'required',
        ]);

        $project = DesignerProject::find($request->project_id);
        $project->agreement_accepted = 1;
        $project->project_status = 1;
        $project->save();

        if (!isEmpty($request->milestone_title) && !isEmpty($request->milestone_amount)) {
            foreach ($request->milestone_title as $key => $title) {
                $milestone = new DesignerProjectMilestonePayment();
                $milestone->project_id = $request->project_id;
                $milestone->title = $title;
                $milestone->amount = $request->milestone_amount[$key];
                $milestone->payable_date = Carbon::now();
                $milestone->save();

            }
        }

        $data = [
            'status' => 200,
            'message' => "Successfully Project Agreement Accepted",
            'payment_id' => $project,
        ];
        return response()->json($data);

    }


}
