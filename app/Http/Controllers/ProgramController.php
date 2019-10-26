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
        $pros = Program::get();

        return view('program/index',compact('pros'));
    }

    public function show(Program $program)
    {
        //查询本课程能够学到的内容
        $contents = ProgramContent::where('program_id', $program->id)->get();

        return view('program/show', compact('program','contents'));
    }
}
