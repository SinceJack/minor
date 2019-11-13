{{--继承公共模板--}}
@extends('layouts.public')

{{--替换标签标题--}}
@section('title')
    用户合同
@endsection

{{--替换当前页信息--}}
@section('location')
    <a href="/userinfo">返回表单</a>
@endsection

{{--当前页面大标题--}}
@section('pagename')
    请确认合同内容
@endsection

{{--按钮选中--}}
@section('current7')
    current
@endsection

{{--替换主体内容--}}
@section('content')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- 合同图片放置位置 -->
    <section class="program-detail">
        <div class="auto-container">
            <div class="row">

                <!-- Image Column -->
                <div class="image-column col-lg-12 col-md-12 col-sm-12">
                    <div class="image-box wow fadeIn">
                        <figure class="image"><a href="/upload/files/hetong/{{$name}}.jpg" class="lightbox-image"><img src="/upload/files/hetong/{{$name}}.jpg" style="border:1px solid black;" alt=""></a></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--合同图片放置结束 -->


    <!-- 用户详细信息填写表格 -->
    {{--<section class="contact-form-section">--}}
        {{--<div class="auto-container">--}}
            {{--<div class="contact-form">--}}
                {{--<div class="sec-title text-center">--}}
                    {{--<span class="title">为了让我们更好的了解你</span>--}}
                    {{--<h2>请认真填写每一个信息</h2>--}}
                {{--</div>--}}

                {{--<form method="post" action="/userinfo" id="contact-form">--}}
                    {{--@csrf--}}
                    {{--<input type="hidden" name="created_at" value="{{date('Y-m-d H:i:s')}}">--}}
                    {{--<input type="hidden" name="updated_at" value="{{date('Y-m-d H:i:s')}}">--}}
                    {{--<input type="hidden" name="ip" value="{{$_SERVER['REMOTE_ADDR']}}">--}}
                    {{--<div class="row">--}}
                        {{--<div class="form-group col-lg-6 col-md-12 col-sm-12">--}}
                            {{--<input type="text" name="name" placeholder="真实姓名" value="{{old('name')}}" required="">--}}
                        {{--</div>--}}
                        {{--<div class="form-group col-lg-6 col-md-12 col-sm-12">--}}
                            {{--<input type="text" name="nickname" placeholder="您的昵称(2字最合适哦)"  value="{{old('nickname')}}" required="">--}}
                        {{--</div>--}}

                        {{--<div class="form-group col-lg-6 col-md-12 col-sm-12">--}}
                            {{--<input type="text" name="wechat" placeholder="您的微信名"  value="{{old('wechat')}}" required="">--}}
                        {{--</div>--}}

                        {{--<div class="form-group col-lg-6 col-md-12 col-sm-12">--}}
                            {{--<input type="text" name="job" placeholder="您的职业"  value="{{old('job')}}" required="">--}}
                        {{--</div>--}}

                        {{--<div class="form-group col-lg-6 col-md-12 col-sm-12">--}}
                            {{--<input type="text" name="age" placeholder="您的年龄"  value="{{old('age')}}" required="">--}}
                        {{--</div>--}}

                        {{--<div class="form-group col-lg-6 col-md-12 col-sm-12">--}}
                            {{--<input type="text" name="sex" placeholder="您的性别(男或女)"  value="{{old('sex')}}" required="">--}}
                        {{--</div>--}}

                        {{--<div class="form-group col-lg-6 col-md-12 col-sm-12">--}}
                            {{--<input type="text" name="hobby" placeholder="您的爱好(可填写多项哦)"  value="{{old('hobby')}}" required="">--}}
                        {{--</div>--}}

                        {{--<div class="form-group col-lg-6 col-md-12 col-sm-12">--}}
                            {{--<input type="text" name="motto" placeholder="您的座右铭"  value="{{old('motto')}}" required="">--}}
                        {{--</div>--}}

                        {{--<div class="form-group col-lg-6 col-md-12 col-sm-12">--}}
                            {{--<input type="text" name="llustrator" placeholder="您喜欢的插画师"  value="{{old('llustrator')}}" required="">--}}
                        {{--</div>--}}

                        {{--<div class="form-group col-lg-6 col-md-12 col-sm-12">--}}
                            {{--<input type="text" name="paint" placeholder="绘画基础(有或无)"  value="{{old('paint')}}" required="">--}}
                        {{--</div>--}}

                        {{--<div class="form-group col-lg-6 col-md-12 col-sm-12">--}}
                            {{--<input type="text" name="software" placeholder="软件基础(例如PS，AI，若没有请填写无)"  value="{{old('software')}}" required="">--}}
                        {{--</div>--}}

                        {{--<div class="form-group col-lg-6 col-md-12 col-sm-12">--}}
                            {{--<input type="text" name="device" placeholder="已拥有的设备(例如ipad，Mac，若没有请填写无)"  value="{{old('device')}}" required="">--}}
                        {{--</div>--}}

                        {{--<div class="form-group col-lg-12 col-md-12 col-sm-12">--}}
                            {{--<textarea name="short" placeholder="您的短期目标(有目标才不会迷失)">{{old('short')}}</textarea>--}}
                        {{--</div>--}}

                        {{--<div class="form-group col-lg-12 col-md-12 col-sm-12">--}}
                            {{--<textarea name="long" placeholder="您的长期目标(你未来的样子)">{{old('long')}}</textarea>--}}
                        {{--</div>--}}

                        {{--<div class="form-group col-lg-12 col-md-12 col-sm-12">--}}
                            {{--<input type="text" name="channel" placeholder="您是通过什么渠道认识的我们？(朋友介绍 or 广告推送)"  value="{{old('channel')}}" required="">--}}
                        {{--</div>--}}

                        {{--<div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">--}}
                            {{--<button class="theme-btn btn-style-one" type="submit" name="submit-form">点一下就好</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!--用户详细信息填写表格 -->

@endsection
