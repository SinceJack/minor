<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    //
    public function index()
    {
        //所有事件
        $eves = Event::all();

        return view('event/index',compact('eves'));
    }

    public function show($id)
    {
        //当前事件
        $event = Event::where('id',$id)->first();

        //其他事件
        $eves = Event::where('id','!=',$id)->orderBy('evetime','desc')->limit(3)->get();

        return view('event/details', compact('event', 'eves'));
    }
}
