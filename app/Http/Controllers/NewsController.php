<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Comment;

class NewsController extends Controller
{
    //
    public function index()
    {
        //获取所有新闻
        $news = News::withCount('comments')->get();

        return view('news/index', compact('news'));
    }

    public function show(News $new)
    {
        //查询当前新闻
        $new = News::withCount('comments')->where('id',$new->id)->first();

        //查询最近的文章
        $otherNews = News::where('id','!=',$new->id)->orderBy('created_at','desc')->limit(3)->get();

        return view('news/details', compact('new','otherNews'));
    }

    public function store(Request $request)
    {
        $res = Comment::insert($request->except('_token','submit-form'));

        if($res){
            return back()->with('您的留言成功！');
        }else{
            return back()->with('留言出现了一些问题，请稍后重试哦！');
        }
    }
}
