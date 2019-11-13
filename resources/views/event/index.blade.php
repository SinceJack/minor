{{--继承公共模板--}}
@extends('layouts.public')

{{--替换标签标题--}}
@section('title')
    大事记
@endsection

{{--替换当前页信息--}}
@section('location')
    <a href="/events">事件</a>
@endsection

{{--当前页面大标题--}}
@section('pagename')
    大事记
@endsection

{{--按钮选中--}}
@section('current3')
    current
@endsection

{{--替换主体内容--}}
@section('content')
    <!-- Event Section -->
    <section class="events-section style-two">
        <div class="auto-container">
            <div class="row">
                <!-- Event Block -->
                @foreach($eves as $eve)
                    <div class="event-block col-xl-6 col-md-12 col-sm-12 wow fadeInLeft">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="/upload/{{$eve->eveimg}}" style="max-width:215px;" alt=""></figure>
                            </div>
                            <div class="content-box">
                                <div class="date">{{$eve->evetime}}</div>
                                <h4><a href="/events/{{$eve->id}}">{{$eve->evetitle}}！</a></h4>
                                <ul class="event-info">
                                    <!-- <li><span>Time:</span> 9:00-11:00</li> -->
                                    <li><span>坐标:</span> {{$eve->evelocation}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{$eves->links()}}
        </div>
    </section>
    <!--End Event Section -->

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
                <span class="title">最新发生的大事儿！</span>
                <h2>{{$first->evetitle}}</h2>
            </div>

            <div class="content">
                <div class="time-counter" style="color:white;font-size:30px;color:#ffae00;">{{$first->evetime}}</div>
            </div>
        </div>
    </section>
    <!-- End Coming Soon -->

    <!-- Mission Section -->
    <section class="mission-section">
        <div class="auto-container">
            <div class="row">
                <!-- Mission Block -->
                <div class="mission-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <figure class="image"><img src="/images/resource/mission-1.jpg" alt=""></figure>
                        <div class="lower-content">
                            <h3>我们的价值观</h3>
                            <div class="text">为创造而生，人生之为人就是一个独立的个体，我们不需要仰仗任何一个人，只做第一个自己！</div>
                        </div>
                    </div>
                </div>

                <!-- Mission Block -->
                <div class="mission-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <figure class="image"><img src="/images/resource/mission-2.jpg" alt=""></figure>
                        <div class="lower-content">
                            <h3>我们的原则</h3>
                            <div class="text">为艺术而活，任何关于艺术方面的问题都可以与我们探讨，我们将很乐意为您解答。</div>
                        </div>
                    </div>
                </div>

                <!-- Mission Block -->
                <div class="mission-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <figure class="image"><img src="/images/resource/mission-3.jpg" alt=""></figure>
                        <div class="lower-content">
                            <h3>我们的理念</h3>
                            <div class="text">艺术无边境，无国界，无种族性别之分……</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Mission Section -->

@endsection

