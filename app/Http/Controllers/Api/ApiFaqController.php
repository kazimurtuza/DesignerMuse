<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class ApiFaqController extends Controller
{
    public function getFaq(){
        return Faq::paginate(10);
    }
}
