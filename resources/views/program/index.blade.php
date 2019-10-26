{{--继承公共模板--}}
@extends('layouts.public')

{{--替换标签标题--}}
@section('title')
    公开课
@endsection

{{--替换当前页信息--}}
@section('location')
    <a href="/programs">公开课</a>
@endsection

{{--当前页面大标题--}}
@section('pagename')
    公开课
@endsection

{{--按钮选中--}}
@section('current4')
    current
@endsection

{{--替换主体内容--}}
@section('content')
    <section class="program-section alternate">
        <div class="auto-container">
            <div class="row">
                <!-- Program Block -->
                @foreach($pros as $pro)
                    <div class="program-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="/programs/{{$pro->id}}">
                                        <img src="/upload/{{$pro->proimg}}" alt="">
                                    </a>
                                </figure>
                            </div>
                            <div class="lower-content">
                                <h4><a href="/programs/{{$pro->id}}">{{$pro->protitle}}</a></h4>
                                <div class="text">{{$pro->prointro}}</div>
                                <ul class="program-info">
                                    <li><span>适合:</span> {{$pro->prosuit}}</li>
                                    <li><span>时间:</span> {{$pro->protime}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--End Program Section -->

    <!-- Video Section -->
    <section class="video-section">
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">观看视频</span>
                            <h2>美梦绘本馆总览，总有一本适合你！</h2>
                        </div>
                        <div class="text">约上朋友，一起打卡美萌绘本馆，充实你的闲暇时光，发挥你的想象力，为你爱的人买上一本绘本，并在睡前读给他/她……</div>
                    </div>
                </div>

                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image-box wow fadeInLeft">
                            <figure class="image"><a href="/images/resource/test.mp4" class="lightbox-image"><img src="/images/resource/video-img.jpg" alt=""><span class="play-btn fa fa-play"></span></a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
