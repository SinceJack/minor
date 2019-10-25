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
            return back()->with('success', '留言成功，工作日早9:00~晚9:00，我们很在10分钟内与您联系！其余时间，我们会尽快与您联系！');
        }else{
            return back()->with('error', '哎呦，我们遇到了一点小问题，您可以直接拨打我们的电话：15510786918');
        }
    }
}
