<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PrivacyAndTerm;
use Illuminate\Http\Request;

class TermsAndPolicyController extends Controller
{
    public function privacyPolicy(Request $request){
        $lang='ar';
        if($request->lang){
            $lang=$request->lang;
        }
        $info=PrivacyAndTerm::first();
        if($info){
            if($lang=='en'){
               $data=[
                   'privacy'=>$info->privacy_en,
               ];
                return response()->json($data);
        }else{
                $data=[
                    'privacy'=>$info->privacy_ar,
                ];
                return response()->json($data);
            }
        }else{
            return '';
        }
    }

    public function terms(Request $request){
        $lang='ar';
        if($request->lang){
            $lang=$request->lang;
        }
        $info=PrivacyAndTerm::first();
        if($info){
            if($lang=='en'){
                $data=[
                    'terms'=>$info->condition_en,
                ];
                return response()->json($data);
            }else{
                $data=[
                    'terms'=>$info->condition_ar,
                ];
                return response()->json($data);
            }
        }else{
            return '';
        }
    }
}
