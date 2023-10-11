<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PrivacyAndTerm;
use Illuminate\Http\Request;

class WebTermsAndConditionController extends Controller
{

    public function termsCondition()
    {
        $info = PrivacyAndTerm::first();
        if ($info) {
            if (languageGet() == 'en') {
                $data = [
                    'terms' => $info->condition_en,
                ];
                return view('pages.termsCondition')->with(compact('data'));
            } else {
                $data = [
                    'terms' => $info->condition_ar,
                ];
                return view('pages.termsCondition')->with(compact('data'));
            }
        } else {
            $data = [
                'terms' => '',
            ];
            return view('pages.termsCondition')->with(compact('data'));
        }
    }

    public function privacyPolicy()
    {
        $info = PrivacyAndTerm::first();
        if ($info) {
            if (languageGet() == 'en') {
                $data = [
                    'privacy' => $info->privacy_en,
                ];
                return view('pages.privacyPolicy')->with(compact('data'));
            } else {
                $data = [
                    'privacy' => $info->privacy_ar,
                ];
                return view('pages.privacyPolicy')->with(compact('data'));

            }
        } else {
            $data = [
                'privacy' => '',
            ];
            return view('pages.privacyPolicy')->with(compact('data'));
        }

    }
}
