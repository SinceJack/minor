<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adver;
use App\Program;
use App\Event;
use App\Appraise;
use App\News;
use App\Comment;

class IndexController extends Controller
{
    //
    public function index()
    {
        //广告图
        $ads = Adver::orderBy('updated_at', 'desc')->limit(6)->get();

        //公开课
        $pros = Program::orderBy('created_at','desc')->limit(3)->get();

        //大事记
        $eves = Event::orderBy('created_at','desc')->limit(4)->get();

        //用户评价
        $pings = Appraise::orderBy('created_at','desc')->limit(6)->get();

        //最近文章
        $news = News::withCount('comments')->orderBy('created_at','desc')->limit(3)->get();

        //即将开始的公开课
        $first = Program::select('id','protitle','protime')->orderBy('protime', 'desc')->limit(1)->first();

        //加载网站首页
        return view('index/index',compact('ads','pros', 'eves', 'pings', 'news', 'first'));
    }
}
