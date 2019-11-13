<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\ProgramContent;

class ProgramController extends Controller
{
    //
    public function index()
    {
        //获得公开课
        $pros = Program::orderBy('created_at','desc')->paginate(4);

        //即将开始的公开课
        $first = Program::select('protitle','protime')->orderBy('protime', 'desc')->limit(1)->first();

        return view('program/index',compact('pros', 'first'));
    }

    public function show(Program $program)
    {
        //查询本课程能够学到的内容
        $contents = ProgramContent::where('program_id', $program->id)->get();

        return view('program/show', compact('program','contents'));
    }
}
