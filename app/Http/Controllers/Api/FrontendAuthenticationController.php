<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\OtpMail;
use App\Mail\UserMailVerification;
use App\Models\AdminSetting;
use App\Models\Designer;
use App\Models\DesignerServiceRate;
use App\Models\Shopkeeper;
use App\Models\ShopkeeperDetails;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Nette\Schema\ValidationException;

class FrontendAuthenticationController extends Controller
{

    public function generalUserLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->where('is_deleted', 0)->first();
        if (!$user) {
            $data = [
                'status' => 401,
                'message' => 'Invalid email address',
                'data' => 'error',
            ];
            return response()->json($data, 401);

        }
        if($user->is_authentic==0){
            $data = [
                'status' => 401,
                'message' => 'Your email verification did not complete. Please verify your mail first',
                'data' => 'error',
            ];
            return response()->json($data, 401);
        }

        if (!$user || !Hash::check($request->password, $user->password)) {
            $data = [
                'status' => 401,
                'message' => 'Invalid Password',
                'data' => 'error',
            ];
            return response()->json($data, 401);
        }

        //$token = $user->createToken($user->email)->plainTextToken;
        $token = $user->createToken('mobile', ['role:generalUser'])->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token,
        ];
        return response($response, 201);
    }

    public function otpGet(Request $request)
    {
        $email = $request->mail;
        $info = 0;
        if ($request->user_type == 'general_user') {
            $user = User::where('email', $email)->first();
            if($user){
                $otp = rand(123127, 787999);
                $user->otp_code = $otp;
                $user->otp_created_at = Carbon::now();
                $user->save();
            }else{
                $data = [
                    'status' => 400,
                    'message' => 'invalid Mail',
                ];
                return response()->json($data, 400);

            }

        }
        if ($request->user_type == 'designer') {
            $user = Designer::where('email', $email)->first();
            if($user){
                $otp = rand(123127, 787999);
                $user->otp_code = $otp;
                $user->otp_created_at = Carbon::now();
                $user->save();
            }
            else{
                $data = [
                    'status' => 400,
                    'message' => 'invalid Mail',
                ];
                return response()->json($data, 400);
            }

        }
        if ($request->user_type == 'shopkeeper') {
            $user = Shopkeeper::where('email', $email)->first();
            if($user){
                $otp = rand(123127, 787999);
                $user->otp_code = $otp;
                $user->otp_created_at = Carbon::now();
                $user->save();
            }else{
                $data = [
                    'status' => 400,
                    'message' => 'invalid Mail',
                ];
                return response()->json($data, 400);
            }
        }


        $details = [
            'user_type' => $user->user_type,
            'otp_code' => $otp,
            'user_id' => $user->id,
            'name' => $request->name,
        ];
        Mail::to($email)->send(new OtpMail($details));

        $data = [
            'status' => 200,
            'message' => 'successfully mail send to' . ' ' . $email,
            'otp' => $otp,
        ];
        return response()->json($data, 200);
    }

    public function checkOtpCode(Request $request)
    {
        $request->validate([
            'mail' => 'required',
            'otp_code' => 'required',
            'user_type' => 'required',
        ]);

        $email = $request->mail;
        $otp = $request->otp_code;
        $user = false;
        if ($request->user_type == 'general_user') {
            $user = User::where('email', $email)->where('otp_code', $otp)->first();
        }
        if ($request->user_type == 'designer') {
            $user = Designer::where('email', $email)->where('otp_code', $otp)->first();
        }
        if ($request->user_type == 'shopkeeper') {
            $user = Shopkeeper::where('email', $email)->where('otp_code', $otp)->first();
        }
        if ($user) {
            $minute = (strtotime(Carbon::now()) - strtotime($user->otp_created_at)) / 60;
            if ($minute <= 5) {
                $data = [
                    'status' => 200,
                    'message' => 'your otp is available',
                    'otp' => $otp,
                ];
                return response()->json($data, 200);

            } else {
                $data = [
                    'status' => 401,
                    'message' => 'Otp code time out maximum available time is 5 minutes',
                    'otp' => $otp,
                ];
                return response()->json($data, 401);

            }
        } else {
            $data = [
                'status' => 400,
                'message' => 'wrong otp code',
                'otp' => $otp,
            ];
            return response()->json($data, 400);

        }
    }

    public function mailVerifyUsingOtpCode(Request $request){
        $email = $request->mail;
        $otp = $request->otp_code;
        $user = User::where('email', $email)->where('otp_code', $otp)->first();
        if($user){
            $user->is_authentic=1;
            $user->save();
            $data = [
                'status' => 200,
                'message' => 'Successfully your mail verification completed',
            ];
            return response()->json($data, 403);

        }else{
            $data = [
                'status' => 403,
                'message' => 'your otp is incorrect',
                'otp' => $otp,
            ];
            return response()->json($data, 403);
        }
    }





    public function resetPassword(Request $request)
    {
        $request->validate([
            'mail' => 'required',
            'otp_code' => 'required',
            'user_type' => 'required',
            'password' => 'numeric|min:6,required',
        ]);

        $email = $request->mail;
        $otp = $request->otp_code;
        $password = $request->password;
        $user = false;
        if ($request->user_type == 'general_user') {
            $user = User::where('email', $email)->where('otp_code', $otp)->first();
        }
        if ($request->user_type == 'designer') {
            $user = Designer::where('email', $email)->where('otp_code', $otp)->first();
        }
        if ($request->user_type == 'shopkeeper') {
            $user = Shopkeeper::where('email', $email)->where('otp_code', $otp)->first();
        }
        if ($user) {
            $minute = (strtotime(Carbon::now()) - strtotime($user->otp_created_at)) / 60;
            if ($minute <= 5) {
                $user->password = Hash::make($password);
                $result = $user->save();
                if ($result) {
                    $data = [
                        'status' => 200,
                        'message' => 'Successfully Password Reset',
                    ];
                    return response()->json($data, 200);
                } else {
                    $data = [
                        'status' => 400,
                        'message' => 'error',
                    ];
                    return response()->json($data, 400);

                }
            } else {
                $data = [
                    'status' => 401,
                    'message' => 'Otp code time out maximum available time is 5 minutes',
                    'otp' => $otp,
                ];
                return response()->json($data, 401);

            }
        } else {
            $data = [
                'status' => 400,
                'message' => 'wrong otp code',
                'otp' => $otp,
            ];
            return response()->json($data, 400);

        }
    }

    public function userRegistration(Request $request)
    {
        $is_existing = User::where('email', $request->email)->first();
        if ($is_existing) {
            $data = [
                'status' => 409,
                'message' => 'Already  registered this email',
                'data' => 'error',
            ];
            return response()->json($data, 409);
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $user->id_no = 10000 + $user->id;
        $otp = rand(123127, 787999);
        $user->otp_code = $otp;
        $user->otp_created_at = Carbon::now();
        $user->save();
//        $details = [
//            'user_type' => $request->user_type,
//            'title' => 'Mail from Registration',
//            'user_id' => $user->id,
//            'name' => $request->name,
//
//        ];
//        Mail::to($request->email)->send(new UserMailVerification($details));


        $details = [
            'user_type' => $user->user_type,
            'otp_code' => $otp,
            'user_id' => $user->id,
            'name' => $request->name,
        ];
        Mail::to($request->email)->send(new OtpMail($details));



        $data = [
            'status' => 200,
            'message' => 'Successfully registration completed. Please check your mail and verify',
            'data' => $user,
        ];
        return response()->json($data);
    }

    public function getToken(Request $request)
    {
        return auth('sanctum')->user();
    }

//designer Registration

    public function designerRegistration(Request $request)
    {
        $is_existing = Designer::where('email', $request->email)->first();
        $settingCharge = AdminSetting::first();
        if ($is_existing) {
            $data = [
                'status' => 409,
                'message' => 'Already  registered this email',
                'data' => 'error',
            ];
            return response()->json($data, 409);
        }
        if (!$settingCharge) {
            $data = [
                'status' => 409,
                'message' => 'Please first Set Charge rate',
                'data' => 'error',
            ];
            return response()->json($data, 409);

        }

        $designer = new Designer();
        $designer->name = $request->name;
        $designer->email = $request->email;
        $designer->password = Hash::make($request->password);

        $designer->meeting_charge_rate = $settingCharge->meeting_charge_rate;
        $designer->project_charge_rate = $settingCharge->project_charge_rate;
        $designer->product_charge_rate = $settingCharge->product_charge_rate;

        $designer->save();
        $designer->id_no = 10000 + $designer->id;
        $designer->save();

        $serviceSetting = new DesignerServiceRate();
        $serviceSetting->designer_id = $designer->id;
        $serviceSetting->call_rate = 0;
        $serviceSetting->video_rate = 0;
        $serviceSetting->online_rate = 0;
        $serviceSetting->active_time_schedule = '30';
        $serviceSetting->save();

        $data = [
            'status' => 200,
            'message' => 'Successfully Created Account',
            'data' => $designer,
        ];
        return response()->json($data);
    }


    public function designerUserLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $designer = Designer::where('email', $request->email)->where('is_deleted', 0)->first();

        if (!$designer) {
            $data = [
                'status' => 401,
                'message' => 'Invalid email address',
                'data' => 'error',
            ];
            return response()->json($data, 401);

        }

        if (!$designer || !Hash::check($request->password, $designer->password)) {
            $data = [
                'status' => 401,
                'message' => 'Invalid Password',
                'data' => 'error',
            ];
            return response()->json($data, 401);
        }

//        $token = $user->createToken($user->email)->plainTextToken;
        $token = $designer->createToken('mobile', ['role:designer'])->plainTextToken;
        $response = [
            'user' => $designer,
            'token' => $token,
        ];
        return response($response, 201);
    }


//    shopkeeper
    function shopkeeperRegistration(Request $request)
    {
        $is_existing = Shopkeeper::where('email', $request->email)->first();
        $settingCharge = AdminSetting::first();
        if ($is_existing) {
            $data = [
                'status' => 409,
                'message' => 'Already  registered this email',
                'data' => 'error',
            ];
            return response()->json($data, 409);
        }

        if (!$settingCharge) {
            $data = [
                'status' => 409,
                'message' => 'Please first Set Charge rate',
                'data' => 'error',
            ];
            return response()->json($data, 409);
        }

        $shop = new Shopkeeper();
        $shop->name = $request->name;
        $shop->email = $request->email;
        $shop->password = Hash::make($request->password);
        $shop->meeting_charge_rate = $settingCharge->meeting_charge_rate;
        $shop->project_charge_rate = $settingCharge->project_charge_rate;
        $shop->product_charge_rate = $settingCharge->product_charge_rate;
        $shop->save();
        $shop->id_no = 10000 + $shop->id;
        $shop->save();

        $shopKeeper = new ShopkeeperDetails();
        $shopKeeper->name = $request->name;
        $shopKeeper->user_id = $shop->id;
        $shopKeeper->save();


        $data = [
            'status' => 200,
            'message' => 'Successfully Created Account',
            'data' => $shop,
        ];
        return response()->json($data);

    }

    function shopkeeperLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request->email;

        $shopkeeper = Shopkeeper::where('email', $email)->where('is_deleted', 0)->first();

        if (!$shopkeeper) {
            $data = [
                'status' => 401,
                'message' => 'Invalid email address',
                'data' => 'error',
            ];
            return response()->json($data, 401);

        }

        if (!$shopkeeper || !Hash::check($request->password, $shopkeeper->password)) {
            $data = [
                'status' => 401,
                'message' => 'Invalid password address',
                'data' => 'error',
            ];
            return response()->json($data, 401);
        }

        $token = $shopkeeper->createToken('mobile', ['role:shopkeeper'])->plainTextToken;
        $response = [
            'user' => $shopkeeper,
            'token' => $token,
        ];
        return response($response, 201);

    }


}
