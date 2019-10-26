<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class GalleryController extends Controller
{
    //
    public function index()
    {
        //查询所有相册
        $gals = Gallery::orderBy('created_at','desc')->get();

        return view('gallery/index',compact('gals'));
    }
}
