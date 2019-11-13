<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserInfo;
use Intervention\Image\ImageManagerStatic as Image;

class UserinfoController extends Controller
{
    //加载用户详细信息添加页面
    public function create()
    {
        return view('user/userinfo');
    }

    //执行用户详细信息添加操作
    public function store(Request $request)
    {
        //判断cookie信息是否与新注册用户一致
        if($request->name == $request->cookie('name')){
            return back()->with('error','您已经注册过喽！非常感谢您的参与！');
        }

        //获取上一名学生的学号
        $newid = UserInfo::select('id')->orderBy('created_at','desc')->first();

        //判断是否有人添加郭了
        if(!$newid){
            $newid = 1;
        }else{
            $newid->id += 1;
        }

        //生成学号 合同编号(19110201)  学号(0201)
        if(is_int($newid)){
            $stuid = date('y').date('m').'02'.$newid;
        }else{
            $stuid = date('y').date('m').'02'.$newid->id;
        }

        //将stuid存储到数据中
        $data[] = $request->except('_token','submit-form','riqi');
        $data[0]['stuid'] = $stuid;

        //将信息添加到数据库，并获取id
        $id = UserInfo::insertGetId($data[0]);

        //闪存数据
        $request->flashExcept('_token');

        //判断是否成功
        if($id!=false){

            return redirect('/usercontract/'.$id)->with('success', '您的问卷已经成功提交！您的学号为：'.$stuid.'，请详细查看合同内容，并保存到本地一份！')->cookie('name',$data[0]['name'],525600);
        }else{
            return back()->with('error','您的问卷遇到一些问题，请重新填写，谢谢！');
        }

    }

    public function contract($id)
    {
        //获取用户信息
        $info = UserInfo::select('stuid','name','idcard','phone')->find($id)->toArray();

        //获取信息
        $stuid = $info['stuid'];
        $name = $info['name'];
        $idcard = $info['idcard'];
        $phone = $info['phone'];

        //读取合同图像
        $img = Image::make(public_path('upload/files/hetong.jpg'));

        //写入内容

        //学号
//        $img->text($stuid, 620, 145, function($font){
//            $font->size(34);
//            $font->color('#f00');
//            $font->file(public_path('fonts/SIMHEI.TTF'));
//        });

        //姓名
        $img->text($name, 297, 470, function($font){
            $font->size(34);
//            $font->color('#f00');
            $font->file(public_path('fonts/SIMHEI.TTF'));
        });

        //身份证号
        $img->text($idcard, 1160, 470, function($font){
            $font->size(34);
//            $font->color('#f00');
            $font->file(public_path('fonts/SIMHEI.TTF'));
        });

        //底部姓名
        $img->text($name, 1340, 3135, function($font){
            $font->size(34);
//            $font->color('#f00');
            $font->file(public_path('fonts/SIMHEI.TTF'));
        });

        //电话号码
        $img->text($phone, 1340, 3210, function($font){
            $font->size(34);
//            $font->color('#f00');
            $font->file(public_path('fonts/SIMHEI.TTF'));
        });

        //月份
        $img->text(date('m'), 1280, 3283, function($font){
            $font->size(34);
//            $font->color('#f00');
            $font->file(public_path('fonts/SIMHEI.TTF'));
        });

        //日期
        $img->text(date('d'), 1380, 3283, function($font){
            $font->size(34);
//            $font->color('#f00');
            $font->file(public_path('fonts/SIMHEI.TTF'));
        });

        //添加合同章
        $img->insert(public_path('upload/files/hetongzhang.png'),'bottom-left','407','50');

        //保存图像
        $img->save(public_path('upload/files/hetong/'.$name.'.jpg'));

        return view('user/contract',compact('name'));
    }
}
