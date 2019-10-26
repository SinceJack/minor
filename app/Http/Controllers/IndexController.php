<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adver;
use App\Program;
use App\Event;
use App\Appraise;
use App\News;

class IndexController extends Controller
{
    //
    public function index()
    {
        //广告图
        $ads = Adver::all();

        //公开课
        $pros = Program::orderBy('created_at','desc')->limit(3)->get();

        //大事记
        $eves = Event::orderBy('created_at','desc')->limit(4)->get();

        //用户评价
        $pings = Appraise::orderBy('created_at','desc')->limit(6)->get();

        //最近文章
        $news = News::orderBy('created_at','desc')->limit(3)->get();

        //加载网站首页
        return view('index/index',compact('ads','pros', 'eves', 'pings', 'news'));
    }
}
