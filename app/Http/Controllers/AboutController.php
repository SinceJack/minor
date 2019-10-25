<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appraise;

class AboutController extends Controller
{
    //关于我们页面
    public function index()
    {
        $comments = Appraise::orderBy('created_at','desc')->get();

        return view('about/index', compact('comments'));
    }
}
