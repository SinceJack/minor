{{--继承公共模板--}}
@extends('layouts.public')

{{--替换标签标题--}}
@section('title')
    课程
@endsection

{{--替换当前页信息--}}
@section('location')
    <a href="/programs">课程</a>
@endsection

{{--当前页面大标题--}}
@section('pagename')
    线上课程
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
                                <div class="text">{!! $pro->prointro !!}</div>
                                <ul class="program-info">
                                    <li><span>适合:</span> {{$pro->prosuit}}</li>
                                    <li><span>时间:</span> {{$pro->protime}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{$pros->links()}}
        </div>
    </section>
    <!--End Program Section -->


    <!-- Coming Soon -->
    <section class="coming-soon-section">
        <div class="parallax-scene parallax-scene-2 anim-icons">
            <span data-depth="0.40" class="parallax-layer icon icon-rainbow-2"></span>
            <span data-depth="0.50" class="parallax-layer icon icon-sparrow-2"></span>
            <span data-depth="0.30" class="parallax-layer icon icon-star-3"></span>
            <span data-depth="0.40" class="parallax-layer icon icon-balloon-2"></span>
        </div>
        <div class="auto-container">
            <div class="sec-title light text-center">
                <span class="title">即将到来的活动</span>
                <h2>{{$first->protitle}}</h2>
            </div>

            <div class="content">
                <div class="time-counter" style="color:white;font-size:30px;color:#ffae00;">{{$first->protime}}</div>
            </div>
        </div>
    </section>
    <!-- End Coming Soon -->


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
                            <figure class="image"><a href="/images/resource/test.mp4" class="lightbox-image"><img src="http://i2.tiimg.com/703561/ccb46cc38d5d8714.jpg" alt=""><span class="play-btn fa fa-play"></span></a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
