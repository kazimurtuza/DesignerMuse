<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\AdminSetting;
use App\Models\Designer;
use App\Models\DesignerAppointmentList;
use App\Models\DesignerEducation;
use App\Models\DesignerExperience;
use App\Models\DesignerPortfolio;
use App\Models\DesignerProfile;
use App\Models\DesignerRatingReview;
use App\Models\DesignerServiceRate;
use App\Models\DesignerServiceTime;
use App\Models\Payment;
use App\Models\TimeSlot;
use Carbon\Carbon;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class FrontendDesignerController extends Controller
{
    function designerList()
    {
        $designerList = $designer = Designer::with('profile')->paginate(12);
        return view('frontend.designer.designerList')->with(compact('designerList'));
    }

    function designerProfile($designer_id)
    {
        $designerId=$designer_id;
        $designerInfo = Designer::find($designerId);
        $userId = $designer_id;
        $profile = DesignerProfile::where('designer_id', $userId)->first();
        $experience = DesignerExperience::where('designer_id', $userId)->get();
        $education = DesignerEducation::where('designer_id', $userId)->get();
         $projects = DesignerPortfolio::where('designer_id', $userId)->orderBy('id', 'desc')->paginate(6);
//         dd($projects);
        $ratingList = DesignerRatingReview::where('designer_id', $userId)->orderBy('id', 'desc')->paginate(5);

        return view('frontend.designer.designerProfile')->with(compact('profile', 'experience', 'education', 'projects', 'designerInfo', 'ratingList'));;
    }

    public function designerAppointment(Request $request)
    {
        $designerInfo = Designer::find($request->designer_id);
        $designerServiceRate = DesignerServiceRate::where('designer_id', $request->designer_id)->first();
        return view('frontend.designer.designerAppointment')->with(compact('designerInfo', 'designerServiceRate'));
    }

    public function getDesignerTimeSlot(Request $request)
    {
        $date = date('Y-m-d', strtotime($request->date));
        $bookedAppointment = DesignerAppointmentList::where('appointment_date', $date)->where('payment_status', 1)->pluck('time_slot_id')->toArray();
        $dateTime = DesignerServiceTime::where('designer_id', $request->designer_id)->where('date', $date)->first();
        if ($dateTime) {
            $serviceTimeId = $dateTime->id;
            $activeSlot = json_decode($dateTime->active_slot_id);
            $slotList = TimeSlot::whereIn('id', $activeSlot)->get();
            return view('frontend.designer._getDesignerTimeSlot')->with(compact('slotList', 'bookedAppointment', 'serviceTimeId'))->render();
        } else {
            return 'empty';
        }
    }

    public function designerAppointmentBook(Request $request)
    {
        $validator = $request->validate([
            'date_range' => ['required'],
            'designer_id' => ['required'],
            'period' => ['required'],
            'package_type' => ['required'],
        ]);
        $user = Auth::user();
        $userId = $user->id;
        $meetingValue = 0;
        $serviceRate = DesignerServiceRate::where('designer_id', $request->designer_id)->first();

//        DB::beginTransaction();
//        try {
            $serviceChargeRate = .1;
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


            $timeDuration = TimeSlot::find($request->period)->duration_minutes;

            $date = date('Y-m-d', strtotime($request->date_range));

            $appointment = new  DesignerAppointmentList();
            $appointment->user_id = $userId;
            $appointment->service_time_id = $request->service_time_id;
            $appointment->designer_id = $request->designer_id;
            $appointment->appointment_date = $date;
            $appointment->time_slot_id = $request->period;
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
            $paymentNo = $payment->id + 10000;
            $payment->id_no = $paymentNo;
            $payment->save();
            $appointment->payment_id = $payment->id;
            $appointment->save();

            //   payment Upayment
            $request_data = array(
                'merchant_id' => '1201',
                'username' => 'test',
                'password' => stripslashes('test'),
                'api_key' => 'jtest123', // in sandbox request - password_hash('API_KEY',PASSWORD_BCRYPT), //In production, pass API_KEY with BCRYPT function
                'order_id' => $payment->id,
                'CurrencyCode' => 'KWD',
                'total_price' => $meetingValue,
                'CstFName' => "Support",
                'CstEmail' => "support@upayments.com",
                'CstMobile' => "123456789",
                'success_url' =>baseUrl().'/designer/payment/success?type=meeting' ,
                'error_url' =>baseUrl().'/designer/payment/success?type=meeting',
                'notifyURL' =>baseUrl().'/designer/payment/success?type=meeting',
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
}
