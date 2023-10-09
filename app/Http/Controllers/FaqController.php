<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function faqList(){
        $faqList=Faq::get();
        return view('admin.setting.faqList')->with(compact('faqList'));
    }
    public function addFaq(Request $request){
        $faq=new Faq();
        $faq->title=$request->title;
        $faq->body=$request->body;
        $faq->save();
        return redirect()->back()->with('success','Successfully Added FAQ');

    }

    public function faqDelete(Request $request){
        Faq::where('id',$request->faq_id)->delete();
        return redirect()->back()->with('success','Successfully FAQ  Deleted');

    }
}
