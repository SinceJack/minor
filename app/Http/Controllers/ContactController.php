<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    //
    public function store(Request $request)
    {
        $res = Contact::insert($request->except('_token','submit-form'));

        if($res!=false){
            return back()->with('success', '您的留言成功喽！请放心，我们会在第一时间给您反馈！请耐心等待！');
        }else{
            return back()->with('error', '哎呦，我们遇到了一点小问题，您可以直接拨打我们的电话：15510786918');
        }
    }
}
