{{--继承公共模板--}}
@extends('layouts.public')

{{--替换标签标题--}}
@section('title')
    用户详情
@endsection

{{--替换当前页信息--}}
@section('location')
    <a href="/">返回首页</a>
@endsection

{{--当前页面大标题--}}
@section('pagename')
    确认合同内容，提交个人信息
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

    <!-- 通知信息图片放置位置 -->
    <section class="program-detail">
        <div class="auto-container">
            <div class="row">

                {{--合同页顶部说明图--}}
                <div class="image-column col-lg-12 col-md-12 col-sm-12">
                    <div class="image-box wow fadeIn">
                        <figure class="image"><a href="/upload/files/1.jpg" class="lightbox-image"><img src="/upload/files/1.jpg"  alt=""></a></figure>
                    </div>
                </div>

                {{--合同页中间合同详情--}}
                <div class="image-column col-lg-12 col-md-12 col-sm-12">
                    <div class="image-box wow fadeIn">
                        <figure class="image"><a href="/upload/files/hetong.jpg" class="lightbox-image"><img src="/upload/files/hetong.jpg"  alt=""></a></figure>
                    </div>
                </div>

                {{--合同页下方花边图--}}
                <div class="image-column col-lg-12 col-md-12 col-sm-12">
                    <div class="image-box wow fadeIn">
                        <figure class="image"><a href="/upload/files/huabian.jpg" class="lightbox-image"><img src="/upload/files/huabian.jpg"  alt=""></a></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--通知信息图片放置结束 -->


    <!-- 用户详细信息填写表格 -->
    <section class="contact-form-section">
        <div class="auto-container">
            <div class="contact-form">
                <div class="sec-title text-center">
                    <span class="title">确认合同内容后，若无其他疑问</span>
                    <h2>请认真填写每一个信息</h2>
                </div>

                <form method="post" action="/userinfo" id="contact-form">
                    @csrf
                    <input type="hidden" name="created_at" value="{{date('Y-m-d H:i:s')}}">
                    <input type="hidden" name="updated_at" value="{{date('Y-m-d H:i:s')}}">
                    <input type="hidden" name="ip" value="{{$_SERVER['REMOTE_ADDR']}}">
                    <div class="row">
                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <input type="text" name="name" placeholder="真实姓名：合同姓名，请认真填写！" style="border:1px dashed red;color:red;" value="{{old('name')}}" required="">
                        </div>
                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <input type="text" name="idcard" placeholder="身份证号：合同身份证号，请认真填写！" style="border:1px dashed red;color:red;" value="{{old('name')}}" required="">
                        </div>
                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <input type="text" name="phone" placeholder="手机号码：合同手机号码，请认真填写！" style="border:1px dashed red;color:red;" value="{{old('name')}}" required="">
                        </div>
                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <input type="text" name="riqi" placeholder="合同日期：合同日期信息" style="border:1px dashed red;color:red;" value="合同日期：{{date('Y-m-d')}}(无需填写)" readonly required="">
                        </div>
                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <input type="text" name="nickname" placeholder="昵称(方便称呼)"  value="{{old('nickname')}}" required="">
                        </div>

                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <input type="text" name="wechat" placeholder="微信名"  value="{{old('wechat')}}" required="">
                        </div>

                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <input type="text" name="job" placeholder="职业"  value="{{old('job')}}" required="">
                        </div>

                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <input type="text" name="age" placeholder="年龄"  value="{{old('age')}}" required="">
                        </div>

                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <input type="text" name="sex" placeholder="性别"  value="{{old('sex')}}" required="">
                        </div>

                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <input type="text" name="hobby" placeholder="爱好"  value="{{old('hobby')}}" required="">
                        </div>

                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <input type="text" name="motto" placeholder="座右铭"  value="{{old('motto')}}" required="">
                        </div>

                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <input type="text" name="llustrator" placeholder="喜欢的插画师"  value="{{old('llustrator')}}" required="">
                        </div>

                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <input type="text" name="paint" placeholder="绘画基础(有/无)"  value="{{old('paint')}}" required="">
                        </div>

                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <input type="text" name="software" placeholder="软件基础(PS，AI，无)"  value="{{old('software')}}" required="">
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <input type="text" name="device" placeholder="拥有的学习设备(ipad/电脑)"  value="{{old('device')}}" required="">
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <textarea name="short" placeholder="短期目标(一个月内)">{{old('short')}}</textarea>
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <textarea name="long" placeholder="长期目标(未来三年)">{{old('long')}}</textarea>
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <input type="text" name="channel" placeholder="获知渠道(微博/微信/朋友推荐)"  value="{{old('channel')}}" required="">
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                            <button class="theme-btn btn-style-one" type="submit" name="submit-form">点一下就好</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--用户详细信息填写表格 -->

@endsection
