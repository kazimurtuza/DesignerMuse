<?php

namespace App\Http\Controllers\GeneralUser;

use App\Http\Controllers\Controller;
use App\Models\AdminSetting;
use App\Models\Designer;
use App\Models\DesignerAppointmentList;
use App\Models\DesignerProject;
use App\Models\DesignerProjectFile;
use App\Models\DesignerProjectMilestonePayment;
use App\Models\DesignerRatingReview;
use App\Models\Notification;
use App\Models\NotificationDeviceToken;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\isEmpty;

class ProjectController extends Controller
{
    public function createProject(Request $request)
    {
        $designer_id = $request->designer_id;
        $meeting_id = $request->meeting_id;

        return view('frontend.customer.project.create_project')->with(compact('designer_id', 'meeting_id'));
    }

    public function projectCompleted(Request $request)
    {
        $info =$project= DesignerProject::find($request->project_id);
        $project->project_status=2;
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

        return redirect()->back()->with('success', 'Successfully Project Completed');
    }

    public function acceptAgreement(Request $request)
    {
        $projectInfo = DesignerProject::find($request->id);
        $projectFile = DesignerProjectFile::where('project_id', $request->id)->first();
        return view('frontend.customer.project.projectAgreementAccept')->with(compact('projectInfo', 'projectFile'));
    }

    public function projectStore(Request $request)
    {
        $clientId = $userId = Auth::user()->id;
        $exist = DesignerProject::where('meeting_id', $request->meeting_id)->where('payment_status', 1)->first();
        if ($exist) {
            return redirect()->intended('user/project/list')->with('error', 'Project Already Created');
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

        $title = "Designer Muse a new project created";
        $body = $project->title . "  project created";

        sendNotification($title, $body, $token);
        Notification::create(['user_type' => 2, 'user_id' => $project->designer_id, 'title' => $title, 'body' => $body]);
        return redirect()->intended('user/project/list')->with('success', 'successfully Project created');

    }

    function myProjectList(Request $request)
    {
         $userId = Auth::user()->id;
          $projectList = DesignerProject::where('client_id', $userId)->with('meetingInfo')->orderBy('id','desc')->paginate(10);

        return view('frontend.customer.project.userProjectList')->with(compact('projectList'));
    }

    function projectDetails(Request $request)
    {
        $projectinfo = DesignerProject::find($request->project_id);

        $totalPayed = DesignerProjectMilestonePayment::where('project_id', $request->project_id)->where('status', 1)->sum('amount');

        return view('frontend.customer.project.project_details')->with(compact('projectinfo', 'totalPayed'));
    }

    public function releaseMilestone(Request $request)
    {
        $chargeRatePrc = 0;
        $charge = AdminSetting::first();
        if ($charge) {
            $chargeRatePrc = $charge->project_charge_rate;
        }

        $userId = Auth::user()->id;
//        DB::beginTransaction();
//        try {

            $mileston = DesignerProjectMilestonePayment::find($request->milestone_id);
            $mileston->paid_date = Carbon::now();
            $mileston->save();
            $designerId = DesignerProject::find($mileston->project_id)->designer_id;

            $designerInfo = Designer::find($designerId);

            if (!$designerInfo->project_charge_rate == null) {
                $chargeRatePrc = $designerInfo->project_charge_rate;
            }

            $service_charge = ($mileston->amount * $chargeRatePrc) / 100;

            $payment = new Payment();
            $payment->sector_type = 0;  /*0=designer 1=shop*/
            $payment->payment_for = 2;   /* 0=shop 1=meeting 2=project*/
            $payment->user_id = $userId;
            $payment->designer_id = $designerId;
            $payment->project_id = $mileston->project_id;
            $payment->project_milestone_id = $mileston->id;
            $payment->total_amount = $mileston->amount;
            $payment->service_charge_amount = $service_charge;
            $payment->date = Carbon::now();
            $payment->save();
            $paymentNo = $payment->id + 10000;
            $payment->id_no = $paymentNo;
            $payment->save();


            $request_data = array(
                'merchant_id' => '1201',
                'username' => 'test',
                'password' => stripslashes('test'),
                'api_key' => 'jtest123', // in sandbox request - password_hash('API_KEY',PASSWORD_BCRYPT), //In production, pass API_KEY with BCRYPT function
                'order_id' => $payment->id,
                'CurrencyCode' => 'KWD',
                'total_price' => $mileston->amount,
                'CstFName' => "Support",
                'CstEmail' => "support@upayments.com",
                'CstMobile' => "123456789",
                'success_url' => url('/designer/payment/success?type=project'),
                'error_url' => url('/designer/payment/success?type=project'),
                'notifyURL' => url('/designer/payment/success?type=project'),
                'test_mode' => 1,//Make it 0 if you use production API
            );

            $fields_string = http_build_query($request_data);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_URL, "https://api.upayments.com/test-payment");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $server_output = curl_exec($ch);
            curl_close($ch);
            $server_output = json_decode($server_output, true);


            if ($server_output['status'] == 'success' && !empty($server_output['paymentURL'])) {
                header('Location: ' . $server_output['paymentURL']);
            } else {
                echo "<pre>";
                print_r($server_output);
            }
            exit();
//        } catch (\Exception $e) {
//            //if there is an error/exception in the above code before commit, it'll rollback
//            DB::rollBack();
//            return $e->getMessage();
//        }


    }

    public function addProjectFile(Request $request)
    {

        if (!empty($request->project_file)) {
            $fileData = new DesignerProjectFile();
            $fileData->project_id = $request->project_id;
            if (!empty($request->project_file)) {
                $file = $request->file('project_file');
                $extension = $file->getClientOriginalExtension();
                $realFilename = $file->getClientOriginalName();
                $filename = time() . '.' . $extension;
                $file->move(public_path('uploads/project'), $filename);
                $fileData->file = 'public/uploads/project/' . $filename;
                $fileData->file_name = $realFilename;
                $fileData->is_client_upload = $request->user_type;
            }
            $fileData->save();
        }
        return redirect()->back()->with('success', 'Successfully file Added');

    }

    public function milestoneCreate(Request $request)
    {
        $milestone = new DesignerProjectMilestonePayment();
        $milestone->project_id = $request->project_id;
        $milestone->title = $request->title;
        $milestone->amount = $request->amount;
        $milestone->payable_date = Carbon::now();
        $milestone->save();
        return redirect()->back()->with('success', 'Successfully Milestone Created');
    }

    public function projectAgreementAcceptStore(Request $request)
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
        $token = NotificationDeviceToken::where('user_type', 'designer')->where('user_id', $project->designer_id)->pluck('token');

        $title = "Designer Muse Agreement Accepted";
        $body = $project->title . "  Agreement Accepted ";

        sendNotification($title, $body, $token);

        Notification::create(['user_type' => 2, 'user_id' => $project->designer_id, 'title' => $title, 'body' => $body]);

        return redirect()->intended('user/project/list')->with('success', 'Successfully Agreement Accepted');


    }
}
