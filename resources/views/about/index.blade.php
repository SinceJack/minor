{{--继承公共模板--}}
@extends('layouts.public')

{{--替换标签标题--}}
@section('title')
    关于我们
@endsection

{{--替换当前页信息--}}
@section('location')
    <a href="/about">关于</a>
@endsection

{{--当前页面大标题--}}
@section('pagename')
    关于我们
@endsection

{{--按钮选中--}}
@section('current2')
    current
@endsection

{{--替换主体内容--}}
@section('content')
    <section class="about-section-three">
        <div class="auto-container">
            <div class="upper-box">
                <div class="row">
                    <div class="image-column col-lg-6 col-md-12 col-sm-12 wow fadeInLeft">
                        <figure class="image"><img src="http://i2.tiimg.com/703561/3178ebc4e761e920.jpg" alt=""></figure>
                    </div>
                    <div class="image-column col-lg-6 col-md-12 col-sm-12 wow fadeInRight">
                        <figure class="image"><img src="http://i2.tiimg.com/703561/465da69bfa33b54a.jpg" alt=""></figure>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="title-column col-lg-4 col-md-6 col-sm-12">
                    <div class="sec-title">
                        <span class="title">关于我们</span>
                        <h2>创办于 2016 年，北京最好的成人绘本馆</h2>
                    </div>
                </div>
                <div class="skill-column col-lg-4 col-md-6 col-sm-12">
                    <!--Skills-->
                    <div class="skills">
                        <!--Skill Item-->
                        <div class="skill-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">儿插与商插</div>
                                <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="3000" data-stop="98">0</span>%</div></div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-width="98"></div></div>
                            </div>
                        </div>
                        <!--Skill Item-->
                        <div class="skill-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">绘本与制作</div>
                                <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="3000" data-stop="88">0</span>%</div></div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-width="88"></div></div>
                            </div>
                        </div>
                        <!--Skill Item-->
                        <div class="skill-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">公开课分享</div>
                                <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="3000" data-stop="78">0</span>%</div></div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-width="78"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-column col-lg-4 col-md-12 col-sm-12">
                    <div class="text">提供了最优质的的儿插与商插课程分享，同时，展开了绘本与周边的创作，让每一个入馆的顾客都能体会到温馨与温暖。</div>
                    <div class="text">提供了最优质的的儿插与商插课程分享，同时，展开了绘本与周边的创作，让每一个入馆的顾客都能体会到温馨与温暖。</div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section Three -->

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="title">大家的评价</div>
                <h2>看看她/他们怎么说</h2>
            </div>

            <div class="testimonial-carousel owl-carousel owl-theme">
                <!-- Testimonial Block -->
                @foreach($comments as $key=>$comment)
                    <div class="@if($key%2==1) testimonial-block @else testimonial-block style-two @endif">
                        <div class="inner-box">
                            <div class="content">
                                <div class="text">{{$comment->apprcontent}}</div>
                            </div>
                            <div class="info-box">
                                <div class="thumb"><img src="/upload/{{$comment->appimg}}" alt=""></div>
                                <h6 class="name">{{$comment->apprname}}</h6>
                                <span class="designation">{{$comment->apprjob}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--End Testimonial Section -->


    <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="title">看看我们</div>
                <h2>我们的老师们</h2>
            </div>

            <div class="row">
                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="/images/resource/team-1.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <ul class="social-icon-colored">
                                    {{--                                    <li><a href="#"><span class="fab fa-weixin"></span></a></li>--}}
                                    <li><a href="https://weibo.com/minor127"><span class="fab fa-weibo"></span></a></li>
                                    {{--                                    <li><a href="#"><span class="fab fa-qq"></span></a></li>--}}
                                </ul>
                            </div>
                        </div>
                        <div class="caption-box">
                            <h6 class="name"><a href="https://weibo.com/minor127">@minor</a></h6>
                            <span class="designation">插画与绘本老师</span>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="/images/resource/team-2.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <ul class="social-icon-colored">
                                    {{--                                    <li><a href="#"><span class="fab fa-weixin"></span></a></li>--}}
                                    <li><a href="https://weibo.com/minorart"><span class="fab fa-weibo"></span></a></li>
                                    {{--                                    <li><a href="#"><span class="fab fa-qq"></span></a></li>--}}
                                </ul>
                            </div>
                        </div>
                        <div class="caption-box">
                            <h6 class="name"><a href="https://weibo.com/minorart">@guoguo</a></h6>
                            <span class="designation">班主任老师</span>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="/images/resource/team-3.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <ul class="social-icon-colored">
                                    {{--                                    <li><a href="#"><span class="fab fa-weixin"></span></a></li>--}}
                                    <li><a href="https://weibo.com/p/1005056682328884"><span class="fab fa-weibo"></span></a></li>
                                    {{--                                    <li><a href="#"><span class="fab fa-qq"></span></a></li>--}}
                                </ul>
                            </div>
                        </div>
                        <div class="caption-box">
                            <h6 class="name"><a href="https://weibo.com/p/1005056682328884">@flyer</a></h6>
                            <span class="designation">技术老师</span>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="/images/resource/team-4.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <ul class="social-icon-colored">
                                    {{--                                    <li><a href="#"><span class="fab fa-weixin"></span></a></li>--}}
                                    <li><a href="https://weibo.com/u/5995932024"><span class="fab fa-weibo"></span></a></li>
                                    {{--                                    <li><a href="#"><span class="fab fa-qq"></span></a></li>--}}
                                </ul>
                            </div>
                        </div>
                        <div class="caption-box">
                            <h6 class="name"><a href="https://weibo.com/u/5995932024">@saige</a></h6>
                            <span class="designation">运营老师</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Team Section -->


    <!-- Call To Action -->
    <section class="call-to-action">
        <div class="parallax-scene parallax-scene-1 anim-icons">
            <span data-depth="0.50" class="parallax-layer icon icon-balloon-3"></span>
            <span data-depth="0.30" class="parallax-layer icon icon-star-6"></span>
            <span data-depth="0.40" class="parallax-layer icon icon-ball"></span>
            <span data-depth="0.20" class="parallax-layer icon icon-idea-2"></span>
            <span data-depth="0.50" class="parallax-layer icon icon-balloon-4"></span>
        </div>

        <div class="auto-container">
            <div class="content-box">
                <span class="title">想要了解更多？</span>
                <h2>拨打我们的联系电话 15910381201</h2>
                <div class="btn-box"><a href="programs.html" class="theme-btn btn-style-two">MORE</a></div>
            </div>
        </div>
    </section>
    <!--End Call To Action -->

    <!-- Why Choose Us -->
    <section class="why-choose-us">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">❤❤❤❤❤❤</span>
                <h2>为什么加入我们</h2>
            </div>

            <div class="services-tabs tabs-box">
                <!--Tab Btns-->
                <ul class="tab-btns tab-buttons clearfix">
                    <li data-tab="#tab-1" class="tab-btn">最具商业价值</li>
                    <li data-tab="#tab-2" class="tab-btn active-btn">前沿的精装绘本</li>
                    <li data-tab="#tab-3" class="tab-btn">最通俗易懂</li>
                </ul>

                <!--Tabs Container-->
                <div class="tabs-content">
                    <!-- Tab -->
                    <div class="tab" id="tab-1">
                        <div class="service-tabs">
                            <div class="row">
                                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="image-box">
                                            <figure class="image"><img src="http://i2.tiimg.com/703561/01f94d65f4860bbf.jpg" alt=""></figure>
                                        </div>
                                    </div>
                                </div>

                                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="text">除了能够切实参与到自己最爱的绘画，插画与绘本的体验中，同时还能够让自己最爱的事物为自己带来收益，养活自己，这才是人生巅峰！</div>
                                        <ul class="list-style-two">
                                            <li>课程实时更新</li>
                                            <li>保证内容精致</li>
                                            <li>优质教师团队</li>
                                            <li>文艺办公打卡</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab / Active Tab -->
                    <div class="tab active-tab" id="tab-2">
                        <div class="service-tabs">
                            <div class="row">
                                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="image-box">
                                            <figure class="image"><img src="http://i2.tiimg.com/703561/92953d492ec75cae.jpg" alt=""></figure>
                                        </div>
                                    </div>
                                </div>

                                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="text">我们拥有独立的海外团队，对接各大知名的绘本书店，确保能够第一时间获取到最新的绘本资源，并进行译制工作，让您能够在家品遍世界绘本的多彩！</div>
                                        <ul class="list-style-two">
                                            <li>海外各大国际都市的合作团队</li>
                                            <li>最新最优的精装绘本</li>
                                            <li>独立译制，独家尊享</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Tab-->
                    <div class="tab" id="tab-3">
                        <div class="service-tabs">
                            <div class="row">
                                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="image-box">
                                            <figure class="image"><img src="http://i2.tiimg.com/703561/9de241c57e8eed60.jpg" alt=""></figure>
                                        </div>
                                    </div>
                                </div>

                                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="text">每周邀请优秀的绘本讲师分享，我们承诺，不是学前教育专业毕业，没有教师资格证的，普通话没有考级的，我们一律不回邀请；不仅要会讲，还要会唱，回调，会表演，会制作绘本，让我们的顾客能够充分的感受到老师的热情。</div>
                                        <ul class="list-style-two">
                                            <li>优质的师资团队</li>
                                            <li>精挑细选的分享课程</li>
                                            <li>定期举办的独享主题活动</li>
                                            <li>节日专题活动</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
