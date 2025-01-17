{{--继承公共模板--}}
@extends('layouts.public')

{{--替换标签标题--}}
@section('title')
    课程
@endsection

{{--替换当前页信息--}}
@section('location')
    <a href="/programs">返回课程</a>
@endsection

{{--当前页面大标题--}}
@section('pagename')
    {{$program->protitle}}
@endsection

{{--按钮选中--}}
@section('current4')
    current
@endsection

{{--替换主体内容--}}
@section('content')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @else
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
    @endif

    <!-- Program Detail -->
    <section class="program-detail">
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <h3>{{$program->protitle}}</h3>
                        <div class="text">{!! $program->prointro !!}</div>
                        <div class="text">{!! $program->procontent !!}</div>
                        <ul class="program-info">
                            <li><span>适合人群:</span> {{$program->prosuit}}</li>
                            <li><span>班级人数:</span> {{$program->pronumber}}</li>
                            <li><span>开课时间:</span> {{$program->protime}}</li>
                        </ul>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box wow fadeIn">
                        <figure class="image"><a href="/upload/{{$program->proimg}}" class="lightbox-image"><img src="/upload/{{$program->proimg}}" alt=""></a></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Program Detail -->

    <!-- Mission Section 你能够学到栏目-->
{{--    <section class="mission-section style-two">--}}
{{--        <div class="auto-container">--}}
{{--            <div class="sec-title text-center">--}}
{{--                <span class="title">我们会教哪些内容</span>--}}
{{--                <h2>您能够学到</h2>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <!-- Mission Block -->--}}
{{--                @foreach($contents as $content)--}}
{{--                    <div class="mission-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">--}}
{{--                        <div class="inner-box">--}}
{{--                            <figure class="image"><img src="/images/resource/{{$content->picture}}" alt=""></figure>--}}
{{--                            <div class="lower-content">--}}
{{--                                <h3>{{$content->title}}</h3>--}}
{{--                                <div class="text">{{$content->intro}}</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!--End Mission Section -->

    <!-- Contact Form Section 报名表格 -->
    <section class="contact-form-section">
        <div class="auto-container">
            <div class="contact-form">
                <div class="sec-title text-center">
                    <span class="title">想要了解更多？</span>
                    <h2>立即留言</h2>
                </div>

                <form method="post" action="/contact/store" id="contact-form">
                    @csrf
                    <input type="hidden" name="created_at" value="{{date('Y-m-d H:i:s')}}">
                    <input type="hidden" name="updated_at" value="{{date('Y-m-d H:i:s')}}">
                    <div class="row">
                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <input type="text" name="name" placeholder="您的昵称" required="">
                        </div>

                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <input type="email" name="email" placeholder="您的邮箱" required="">
                        </div>

                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <input type="text" name="phone" placeholder="您的电话" required="">
                        </div>

                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <input type="text" name="subject" placeholder="您感兴趣的课程" required="">
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <textarea name="message" placeholder="书写留言内容"></textarea>
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                            <button class="theme-btn btn-style-one" type="submit" name="submit-form">快速留言</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--End Contact Form Section -->

    <!-- Call To Action -->
    <section class="call-to-action">
        <div class="parallax-scene parallax-scene-3 anim-icons">
            <span data-depth="0.50" class="parallax-layer icon icon-balloon-3"></span>
            <span data-depth="0.30" class="parallax-layer icon icon-star-6"></span>
            <span data-depth="0.40" class="parallax-layer icon icon-ball"></span>
            <span data-depth="0.20" class="parallax-layer icon icon-idea-2"></span>
            <span data-depth="0.50" class="parallax-layer icon icon-balloon-4"></span>
        </div>

        <div class="auto-container">
            <div class="content-box">
                <span class="title">想要了解更多</span>
                <h2>拨打我们的联系电话 <span><br>191 1037 5125</span></h2>
                <div class="btn-box"><a href="programs.html" class="theme-btn btn-style-two">MORE</a></div>
            </div>
        </div>
    </section>
    <!--End Call To Action -->

    <!-- Team Section -->
    <section class="team-section style-two">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">授课老师</span>
                            <h2>我们的老师们</h2>
                        </div>
                        <div class="text">能够等到您和我们相聚，我们必须要拿出最好的东西来呈现给你们，不管是环境、设施、绘本还是师资，这是我开店的原则。我们的老师均是教育专业毕业，拥有教师资格证，普通话通过了一级甲等的考试。</div>
                    </div>
                </div>

                <div class="team-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row">
                        <!-- Team Block -->
                        <div class="team-block col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="/images/resource/team-1.jpg" alt=""></figure>
                                    <div class="overlay-box">
                                        <ul class="social-icon-colored">
{{--                                            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>--}}
                                            <li><a href="https://weibo.com/minor127"><span class="fab fa-weibo"></span></a></li>
{{--                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>--}}
                                        </ul>
                                    </div>
                                </div>
                                <div class="caption-box">
                                    <h6 class="name"><a href="#">@minor</a></h6>
                                    <span class="designation">讲师</span>
                                </div>
                            </div>
                        </div>

                        <!-- Team Block -->
                        <div class="team-block col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="/images/resource/team-2.jpg" alt=""></figure>
                                    <div class="overlay-box">
                                        <ul class="social-icon-colored">
{{--                                            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>--}}
                                            <li><a href="https://weibo.com/minorart"><span class="fab fa-weibo"></span></a></li>
{{--                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>--}}
                                        </ul>
                                    </div>
                                </div>
                                <div class="caption-box">
                                    <h6 class="name"><a href="#">@guoguo</a></h6>
                                    <span class="designation">班主任</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Team Section -->
@endsection
