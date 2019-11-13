<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <!-- 高德地图相关 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width">

    <title>美萌 - 为生活创造美</title>
    <meta name="keywords" content="美萌"/>
    <meta name="description" content="美萌,minor,art,艺术,创作,插画,儿童插画,儿插,商插,在线课程,二维码,艺术二维码,艺术新闻,美萌，一个集美与萌于一身的部落，这是一个可以让你的心灵停靠的港湾……"/>

    <!-- 高德地图样式链接 -->
    <link rel="stylesheet" href="https://a.amap.com/jsapi_demos/static/demo-center/css/demo-center.css" />

    <!-- 高德地图样式 -->
    <link rel="stylesheet" href="css/gaode.css" rel="stylesheet" type="text/css">

    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
    <link href="plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
    <link href="plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->

    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="/images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <script>
        alert($);
    </script>

    <header class="main-header header-style-two">
        <!-- 导航条开始 -->
        <div class="header-top">
            <div class="auto-container">
                <div class="clearfix">
                    <!-- 联系方式 -->
                    <div class="top-left">
                        <ul class="info-list clearfix">
                            <li><a href="tel:19110375125"><span class="fa fa-phone-square"></span> 191 1037 5125</a></li>
                            <li><a href="mailto:739019620@qq.com"><span class="fa fa-envelope"></span>739019620@qq.com</a></li>
                        </ul>
                    </div>
                    <!-- 登录、搜索按钮 -->
                    <div class="top-right">
                        <!-- link Box -->
                        <!-- <div class="link-box"><a href="contact.html">Login</a></div> -->
                        <!-- <div class="search-box-btn">Search <span class="icon fa fa-search"></span></div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- 导航条结束 -->


        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @else
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
        @endif

        <!-- logo导航条开始 -->
        <div class="header-lower">
            <div class="auto-container clearfix">
                <!--Info-->
                <div class="logo-outer">
                    <div class="logo"><a href="/"><img src="/images/logo.png" alt="" title=""></a></div>
                </div>

                <!--Nav Box-->
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="navbar-header">
                            <!-- Togg le Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon flaticon-menu-button"></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="/">首页 ❤</a></li>
                                <li class="dropdown"><a href="/about">关于 ✰</a></li>
                                <li class="dropdown"><a href="/events">事记 ☾</a></li>
                                <li class="dropdown"><a href="/programs">课程 ♪</a></li>
                                <li class="dropdown"><a href="/gallery">画廊 (˘͈ᵕ ˘͈❀)</a></li>
                                <li class="dropdown"><a href="/news">新闻 ( ᵒ̴̶̷̤໐ᵒ̴̶̷̤ )</a></li>
{{--                                <li class="dropdown"><a href="/contact">联系我们</a></li>--}}
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!-- Main Menu End-->
                    <!-- <div class="outer-box clearfix">
                        <ul class="social-icon-colored">
                            <li><a href="#"><span class="fab fa-weixin"></span></a></li>
                            <li><a href="#"><span class="fab fa-weibo"></span></a></li>
                            <li><a href="#"><span class="fab fa-qq"></span></a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- logo导航条结束 -->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="/" title=""><img src="/images/logo.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="/">首页 ❤</a></li>
                                <li class="dropdown"><a href="/about">关于 ✰</a></li>
                                <li class="dropdown"><a href="/events">事记 ☾</a></li>
                                <li class="dropdown"><a href="/programs">课程 ♪</a></li>
                                <li class="dropdown"><a href="/gallery">画廊 (˘͈ᵕ ˘͈❀)</a></li>
                                <li class="dropdown"><a href="/news">新闻 ( ᵒ̴̶̷̤໐ᵒ̴̶̷̤ )</a></li>
{{--                                <li class="dropdown"><a href="/contact">联系我们</a></li>--}}
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    </header>
    <!-- End Main Header -->

    <!--Main Slider-->
    <section class="main-slider style-two">
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                    <!-- Slide 1 -->
                @foreach($ads as $ad)
                    <li data-transition="parallaxvertical" data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1681" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="/images/main-slider/4.jpg">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="/upload/{{$ad->adimg}}">

                    </li>
                @endforeach
                    <!-- Slide 2 -->
{{--                    <li data-transition="parallaxvertical" data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1682" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="/images/main-slider/4.jpg">--}}

{{--                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="/images/main-slider/3.jpg">--}}

{{--                        <div class="tp-caption tp-resizeme big-ipad-hidden tp-shape tp-shapewrapper rs-parallaxlevel-4"--}}
{{--                             data-paddingbottom="[0,0,0,0]"--}}
{{--                             data-paddingleft="[0,0,0,0]"--}}
{{--                             data-paddingright="[0,0,0,0]"--}}
{{--                             data-paddingtop="[0,0,0,0]"--}}
{{--                             data-responsive_offset="on"--}}
{{--                             data-type="text"--}}
{{--                             data-height="none"--}}
{{--                             data-whitespace="nowrap"--}}
{{--                             data-width="none"--}}
{{--                             data-hoffset="['-80','15','15','15']"--}}
{{--                             data-voffset="['30','0','0','0']"--}}
{{--                             data-x="['left','left','left','left']"--}}
{{--                             data-y="['top','top','top','top']"--}}
{{--                             data-textalign="['top','top','top','top']"--}}
{{--                             data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>--}}
{{--                            <span class="icon icon-sun-2"></span>--}}
{{--                        </div>--}}


{{--                        <div class="tp-caption tp-resizeme big-ipad-hidden tp-shape tp-shapewrapper rs-parallaxlevel-3"--}}
{{--                             data-paddingbottom="[0,0,0,0]"--}}
{{--                             data-paddingleft="[0,0,0,0]"--}}
{{--                             data-paddingright="[0,0,0,0]"--}}
{{--                             data-paddingtop="[0,0,0,0]"--}}
{{--                             data-responsive_offset="on"--}}
{{--                             data-type="text"--}}
{{--                             data-height="none"--}}
{{--                             data-whitespace="nowrap"--}}
{{--                             data-width="none"--}}
{{--                             data-hoffset="['-255','15','15','15']"--}}
{{--                             data-voffset="['175','0','0','0']"--}}
{{--                             data-x="['left','left','left','left']"--}}
{{--                             data-y="['top','top','top','top']"--}}
{{--                             data-textalign="['top','top','top','top']"--}}
{{--                             data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>--}}
{{--                            <span class="icon icon-star"></span>--}}
{{--                        </div>--}}

{{--                        <div class="tp-caption tp-resizeme big-ipad-hidden tp-shape tp-shapewrapper rs-parallaxlevel-3"--}}
{{--                             data-paddingbottom="[0,0,0,0]"--}}
{{--                             data-paddingleft="[0,0,0,0]"--}}
{{--                             data-paddingright="[0,0,0,0]"--}}
{{--                             data-paddingtop="[0,0,0,0]"--}}
{{--                             data-responsive_offset="on"--}}
{{--                             data-type="text"--}}
{{--                             data-height="none"--}}
{{--                             data-whitespace="nowrap"--}}
{{--                             data-width="none"--}}
{{--                             data-hoffset="['440','15','15','15']"--}}
{{--                             data-voffset="['105','0','0','0']"--}}
{{--                             data-x="['left','left','left','left']"--}}
{{--                             data-y="['top','top','top','top']"--}}
{{--                             data-textalign="['top','top','top','top']"--}}
{{--                             data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>--}}
{{--                            <span class="icon icon-star-4"></span>--}}
{{--                        </div>--}}

{{--                        <div class="tp-caption tp-resizeme big-ipad-hidden tp-shape tp-shapewrapper rs-parallaxlevel-4"--}}
{{--                             data-paddingbottom="[0,0,0,0]"--}}
{{--                             data-paddingleft="[0,0,0,0]"--}}
{{--                             data-paddingright="[0,0,0,0]"--}}
{{--                             data-paddingtop="[0,0,0,0]"--}}
{{--                             data-responsive_offset="on"--}}
{{--                             data-type="text"--}}
{{--                             data-height="none"--}}
{{--                             data-whitespace="nowrap"--}}
{{--                             data-width="none"--}}
{{--                             data-hoffset="['150','15','15','15']"--}}
{{--                             data-voffset="['40','0','0','0']"--}}
{{--                             data-x="['right','right','right','right']"--}}
{{--                             data-y="['top','top','top','top']"--}}
{{--                             data-textalign="['top','top','top','top']"--}}
{{--                             data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>--}}
{{--                            <span class="icon icon-idea"></span>--}}
{{--                        </div>--}}

{{--                        <div class="tp-caption tp-resizeme big-ipad-hidden tp-shape tp-shapewrapper rs-parallaxlevel-5"--}}
{{--                             data-paddingbottom="[0,0,0,0]"--}}
{{--                             data-paddingleft="[0,0,0,0]"--}}
{{--                             data-paddingright="[0,0,0,0]"--}}
{{--                             data-paddingtop="[0,0,0,0]"--}}
{{--                             data-responsive_offset="on"--}}
{{--                             data-type="text"--}}
{{--                             data-height="none"--}}
{{--                             data-whitespace="nowrap"--}}
{{--                             data-width="none"--}}
{{--                             data-hoffset="['-360','15','15','15']"--}}
{{--                             data-voffset="['150','0','0','0']"--}}
{{--                             data-x="['left','left','left','left']"--}}
{{--                             data-y="['bottom','bottom','bottom','bottom']"--}}
{{--                             data-textalign="['top','top','top','top']"--}}
{{--                             data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>--}}
{{--                            <span class="icon icon-pencil"></span>--}}
{{--                        </div>--}}

{{--                        <div class="tp-caption"--}}
{{--                             data-paddingbottom="[0,0,0,0]"--}}
{{--                             data-paddingleft="[0,0,0,0]"--}}
{{--                             data-paddingright="[0,0,0,0]"--}}
{{--                             data-paddingtop="[0,0,0,0]"--}}
{{--                             data-responsive_offset="on"--}}
{{--                             data-type="text"--}}
{{--                             data-height="none"--}}
{{--                             data-width="['650','650','670','400']"--}}
{{--                             data-whitespace="normal"--}}
{{--                             data-hoffset="['15','15','15','15']"--}}
{{--                             data-voffset="['-185','-180','-140','-210']"--}}
{{--                             data-x="['left','left','left','left']"--}}
{{--                             data-y="['middle','middle','middle','middle']"--}}
{{--                             data-textalign="['top','top','top','top']"--}}
{{--                             data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>--}}
{{--                            <div class="title">Iminor.art & Creative Together</div>--}}
{{--                        </div>--}}

{{--                        <div class="tp-caption"--}}
{{--                             data-paddingbottom="[0,0,0,0]"--}}
{{--                             data-paddingleft="[0,0,0,0]"--}}
{{--                             data-paddingright="[0,0,0,0]"--}}
{{--                             data-paddingtop="[0,0,0,0]"--}}
{{--                             data-responsive_offset="on"--}}
{{--                             data-type="text"--}}
{{--                             data-height="none"--}}
{{--                             data-width="['650','730','650','400']"--}}
{{--                             data-whitespace="normal"--}}
{{--                             data-hoffset="['15','15','15','15']"--}}
{{--                             data-voffset="['-25','-25','-25','-25']"--}}
{{--                             data-x="['left','left','left','left']"--}}
{{--                             data-y="['middle','middle','middle','middle']"--}}
{{--                             data-textalign="['top','top','top','top']"--}}
{{--                             data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>--}}
{{--                            <h2 style="font-weight: bold;">让每一天都充满希望与热情</h2>--}}
{{--                        </div>--}}

{{--                        <div class="tp-caption tp-resizeme"--}}
{{--                             data-paddingbottom="[0,0,0,0]"--}}
{{--                             data-paddingleft="[0,0,0,0]"--}}
{{--                             data-paddingright="[0,0,0,0]"--}}
{{--                             data-paddingtop="[0,0,0,0]"--}}
{{--                             data-responsive_offset="on"--}}
{{--                             data-type="text"--}}
{{--                             data-height="none"--}}
{{--                             data-whitespace="normal"--}}
{{--                             data-width="['650','650','650','400']"--}}
{{--                             data-hoffset="['15','15','15','15']"--}}
{{--                             data-voffset="['190','190','130','190']"--}}
{{--                             data-x="['left','left','left','left']"--}}
{{--                             data-y="['middle','middle','middle','middle']"--}}
{{--                             data-textalign="['top','top','top','top']"--}}
{{--                             data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>--}}
{{--                            <div class="link-box"><a href="/about" class="theme-btn btn-style-one">MORE</a></div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
                </ul>
            </div>
        </div>

        <div class="scroll-to-top scroll-to-target" data-target="#about-section"><span class="icon icon-arrow-up"></span></div>
    </section>
    <!--End Main Slider-->

    <!-- About Section Two -->
    <section class="about-section-two" id="about-section">
        <div class="auto-container">
            <div class="parallax-scene parallax-scene-1 anim-icons">
                <span data-depth="0.20" class="parallax-layer icon icon-rainbow-3"></span>
                <span data-depth="0.40" class="parallax-layer icon icon-star-2"></span>
                <span data-depth="0.30" class="parallax-layer icon icon-star-5"></span>
                <span data-depth="0.50" class="parallax-layer icon icon-plane-2"></span>
            </div>

            <div class="sec-title text-center">
                <span class="title">美萌介绍</span>
                <h2>欢迎来到美萌 <br>创艺空间</h2>
            </div>

            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="text">生活其实很简单，画一幅画，一杯咖啡，一张照片，一次旅行，虽然简单，却又那么让人沉醉。</div>
                        <ul class="list-style-two">
                            <li>每天为自己的心情画一张画儿</li>
                            <li>和你的孩子一起分发挥想象力</li>
                            <li>专业而且负责任的班主任老师</li>
                            <li>最佳的插画和绘本学习空间</li>
                        </ul>
                        <div class="btn-box"><a href="/programs" class="theme-btn btn-style-one">MORE</a></div>
                    </div>
                </div>

                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image wow fadeInLeft"><img src="http://i2.tiimg.com/703561/bc3acbabe07089c8.jpg" alt=""></figure>
                            <figure class="image2 wow fadeInRight"><img src="http://i2.tiimg.com/703561/fdbcadfd9926afb6.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section Two -->

    <!-- Program Section -->
    <section class="program-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">我们的课程</span>
                <h2>最新的课程</h2>
            </div>

            <div class="row">
                <!-- Program Block -->
            @foreach($pros as $pro)
                <div class="program-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="/programs/{{$pro->id}}"><img src="/upload/{{$pro->proimg}}" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <h4><a href="/programs/{{$pro->id}}">{{$pro->protitle}}</a></h4>
                            <div class="text">{!! $pro->prointro !!}</div>
                            <ul class="program-info">
{{--                                <li><span>地点:</span> {{$pro->}}</li>--}}
                                <li><span>时间:</span> {{$pro->protime}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>

            <div class="btn-box">
                <a href="/programs" class="theme-btn btn-style-one">MORE</a>
            </div>
        </div>
    </section>
    <!--End Program Section -->

    <!-- Event Section -->
    <section class="events-section">
        <div class="auto-container">
            <div class="sec-title light text-center">
                <span class="title">我们的大事记</span>
                <h2>快来看看我们最近搞了哪些事情</h2>
            </div>

            <div class="row">
                <!-- Event Block -->
                @foreach($eves as $eve)
                    <div class="event-block col-xl-6 col-md-12 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="/upload/{{$eve->eveimg}}" style="max-width: 215px;" alt=""></figure>
                            </div>
                            <div class="content-box">
                                <div class="date">{{$eve->evetime}}</div>
                                <h4><a href="/events/{{$eve->id}}">{{$eve->evetitle}}</a></h4>
                                <ul class="event-info">
                                    <li><span>时间:</span> {{$eve->evetime}}</li>
                                    <li><span>地点:</span> {{$eve->evelocation}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="btn-box text-center">
                <a href="/events" class="theme-btn btn-style-one">MORE</a>
            </div>
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
                <span class="title">立即预定你的位置</span>
                <h2>{{$first->protitle}}</h2>
            </div>

            <div class="content">
                <div class="time-counter" style="color:white;font-size:30px;color:#ffae00;">{{$first->protime}}</div>
            </div>
            <br>
            <br>
            <div class="btn-box text-center">
                <a href="/programs/{{$first->id}}" class="theme-btn btn-style-one">MORE</a>
            </div>
        </div>
    </section>
    <!-- End Coming Soon -->

    <!-- Testimonial Section -->
    <section class="testimonial-section alternate">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="title">大家的评价</div>
                <h2>看看她/他们怎么说</h2>
            </div>

            <div class="testimonial-carousel owl-carousel owl-theme">
                <!-- Testimonial Block -->
                @foreach($pings as $key=>$ping)
                <div class="@if($key%2==1) testimonial-block @else testimonial-block style-two @endif">
                    <div class="inner-box">
                        <div class="content">
                            <div class="text">{{$ping->apprcontent}}</div>
                        </div>
                        <div class="info-box">
                            <div class="thumb"><img src="/upload/{{$ping->appimg}}" alt=""></div>
                            <h6 class="name">{{$ping->apprname}}</h6>
                            <span class="designation">{{$ping->apprjob}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--End Testimonial Section -->

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
                <span class="title">想要了解更多？</span>
                <h2>拨打我们的联系电话 19110375125</h2>
                <div class="btn-box"><a href="/about" class="theme-btn btn-style-two">MORE</a></div>
            </div>
        </div>
    </section>
    <!--End Call To Action -->

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
                            <figure class="image"><img src="http://i2.tiimg.com/703561/6cd5782d2aed6857.jpg" alt=""></figure>
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
                            <figure class="image"><img src="http://i2.tiimg.com/703561/4143b0280486ce8e.jpg" alt=""></figure>
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
                            <figure class="image"><img src="http://i2.tiimg.com/703561/6778ac334cb745c8.jpg" alt=""></figure>
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
                            <figure class="image"><img src="http://i2.tiimg.com/703561/05312632fb36cb64.jpg" alt=""></figure>
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

    <!-- Fluid Section One -->
    <section class="fluid-section-two">
        <div class="outer-container clearfix">


            <!--Content Column-->
            <div class="contact-column">
                <div class="parallax-scene parallax-scene-4 anim-icons">
                    <span data-depth="0.50" class="parallax-layer icon icon-cloud-3"></span>
                    <span data-depth="0.30" class="parallax-layer icon icon-star-7"></span>
                    <span data-depth="0.40" class="parallax-layer icon icon-balloon-2"></span>
                </div>

                <div class="inner-column clearfix">
                    <div class="contact-form">
                        <div class="sec-title light">
                            <span class="title">与我们保持联系</span>
                            <h2>联系我们</h2>
                        </div>
                        <form action="/contact/store" method="post">
                            @csrf
                            <input type="hidden" name="created_at" value="{{date('Y-m-d H:i:s')}}">
                            <input type="hidden" name="updated_at" value="{{date('Y-m-d H:i:s')}}">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="您的姓名" required="">
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" placeholder="您的邮箱" required="">
                            </div>

                            <div class="form-group">
                                <input type="text" name="phone" placeholder="您的电话" required="">
                            </div>

                            <div class="form-group">
                                <textarea name="message" placeholder="给我们留言"></textarea>
                            </div>

                            <div class="form-group">
                                <button class="theme-btn btn-style-one" type="submit" name="submit-form">提交</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--Map Column-->
            <div class="map-column">
                <!--Map Outer-->
                <div class="map-outer">
                    <!--Map Canvas-->
                    <!-- <div class="map-canvas"
                        data-zoom="12"
                        data-lat="-37.817085"
                        data-lng="144.955631"
                        data-type="roadmap"
                        data-hue="#ffc400"
                        data-title="Envato"
                        data-icon-path="/images/icons/map-marker.png"
                        data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                    </div> -->

                    <!-- 高德地图容器 -->
                    <div id="container"></div>

                    <!-- 高德地图Api -->
                    <script src="https://webapi.amap.com/maps?v=1.4.15&key=3854ef66a5c298dc6e81bd28377ffadd"></script>
                    <script type="text/javascript">

                        // 实例化高德地图应用
                        var map = new AMap.Map('container');

                        var map = new AMap.Map('container', {
                            zoom:20,//级别
                            center: [116.498427,39.984453],//中心点坐标
                            viewMode:'3D'//使用3D视图
                        });
                        addMarker();

                        //添加marker标记
                        function addMarker() {
                            map.clearMap();
                            var marker = new AMap.Marker({
                                map: map,
                                position: [116.498427,39.984453]
                            });
                            //鼠标点击marker弹出自定义的信息窗体
                            AMap.event.addListener(marker, 'click', function () {
                                infoWindow.open(map, marker.getPosition());
                            });
                        }

                        //实例化信息窗体
                        var title = '美萌绘本馆<span style="font-size:11px;color:#F00;">门票价格:89</span>',
                            content = [];
                        content.push("<img src='http://tpc.googlesyndication.com/simgad/5843493769827749134'>地址：北京市朝阳区酒仙桥北路4号798艺术区极地国际创新中心303室");
                        content.push("电话：191-1037-5125");
                        content.push("<a href='http://www.iminor.art/about.html'>详细信息</a>");
                        var infoWindow = new AMap.InfoWindow({
                            isCustom: true,  //使用自定义窗体
                            content: createInfoWindow(title, content.join("<br/>")),
                            offset: new AMap.Pixel(16, -45)
                        });

                        //构建自定义信息窗体
                        function createInfoWindow(title, content) {
                            var info = document.createElement("div");
                            info.className = "custom-info input-card content-window-card";

                            //可以通过下面的方式修改自定义窗体的宽高
                            //info.style.width = "400px";
                            // 定义顶部标题
                            var top = document.createElement("div");
                            var titleD = document.createElement("div");
                            var closeX = document.createElement("img");
                            top.className = "info-top";
                            titleD.innerHTML = title;
                            closeX.src = "https://webapi.amap.com//images/close2.gif";
                            closeX.onclick = closeInfoWindow;

                            top.appendChild(titleD);
                            top.appendChild(closeX);
                            info.appendChild(top);

                            // 定义中部内容
                            var middle = document.createElement("div");
                            middle.className = "info-middle";
                            middle.style.backgroundColor = 'white';
                            middle.innerHTML = content;
                            info.appendChild(middle);

                            // 定义底部内容
                            var bottom = document.createElement("div");
                            bottom.className = "info-bottom";
                            bottom.style.position = 'relative';
                            bottom.style.top = '0px';
                            bottom.style.margin = '0 auto';
                            var sharp = document.createElement("img");
                            sharp.src = "https://webapi.amap.com//images/sharp.png";
                            bottom.appendChild(sharp);
                            info.appendChild(bottom);
                            return info;
                        }

                        //关闭信息窗体
                        function closeInfoWindow() {
                            map.clearInfoWindow();
                        }
                    </script>

                </div>
                <div class="caption-box"><h3>任何问题请电话咨询：191 1037 5125</h3></div>
            </div>

        </div>
    </section>
    <!-- End Fluid Section One -->

    <!-- News Section -->
    <section class="news-section-two">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">新鲜事儿 & 美文</span>
                <h2>最近的文章</h2>
            </div>

            <div class="row">
                <!-- News Block -->
                @foreach($news as $new)
                    <div class="news-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="/news/{{$new->id}}"><img src="/upload/{{$new->newspicture}}" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li><span class="fa fa-calendar-alt"></span><a href="news-single.html">{{$new->created_at}}</a></li>
                                    <li><span class="fa fa-comments"></span><a href="news-single.html">{{$new->comments_count}} 条评论</a></li>
                                </ul>
                                <h3><a href="/news/{{$new->id}}">{{$new->newstitle}}</a></h3>
                                <div class="text">{!! \Str::limit($new->newscontent, 75, '...') !!}</div>
                                <div class="btn-box"><a href="/news/10" class="theme-btn btn-style-one">MORE</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--End News Section -->

    <!-- 友情链接 -->
    <!-- <section class="clients-section">
        <div class="auto-container">
            <div class="sponsors-outer">
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/images/clients/5.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/images/clients/3.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="/images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/images/clients/5.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/images/clients/3.png" alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section> -->
    <!--友情链接结束-->

    <!--Main Footer-->
    <footer class="main-footer">
        <div class="anim-icons">
            <span class="icon icon-sparrow wow zoomIn" data-wow-delay="400ms"></span>
            <span class="icon icon-rainbow-2 wow zoomIn" data-wow-delay="800ms"></span>
            <span class="icon icon-star-3"></span>
            <span class="icon icon-star-3 two"></span>
            <span class="icon icon-sun"></span>
            <span class="icon icon-plane wow zoomIn" data-wow-delay="1200ms"></span>
        </div>

        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon icon-arrow-up"></span></div>

        <!--footer upper-->
        <div class="footer-upper">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Big Column-->
                    <div class="big-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
                                    <div class="logo">
                                        <a href="/"><img src="http://i1.fuimg.com/703561/9272ad9d4950c81f.png" alt="" /></a>
                                    </div>
                                    <div class="text">美萌创艺工作室，一个创造美与萌的神奇工作室，在这里和我们一起畅想……</div>

                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget">
                                    <h4 class="widget-title">联系我们</h4>
                                    <div class="widget-content">
                                        <ul class="contact-info">
                                            <li><a href="tel:19110375125"><span class="fa fa-phone-square"></span>191 1037 5125</a></li>
                                            <li><a href="mailto:739019620@qq.com"><span class="fa fa-envelope"></span>739019620@qq.com</a></li>
                                            <li><span class="fa fa-map"></span> 北京市朝阳区798艺术区极地国际创新中心3楼</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Big Column-->
                    <div class="big-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                        <div class="row clearfix">
                            <!--Footer Column-->
                            <div class="footer-column col-xl-3 col-lg-3 col-md-6 col-sm-4">
                                <div class="footer-widget links-widget">
                                    <h4 class="widget-title">快速访问</h4>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="/">首页</a></li>
                                            <li><a href="/about">关于</a></li>
                                            <li><a href="/events">事记</a></li>
                                            <li><a href="/programs">课程</a></li>
                                            <li><a href="/gallery">画廊</a></li>
                                            <li><a href="/news">新闻</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-xl-4 col-lg-3 col-md-6 col-sm-12">
                                <div class="footer-widget activites-widget">
                                    <h4 class="widget-title">活动项目</h4>
                                    <div class="widget-content">
                                        <img src="http://i2.tiimg.com/703561/7c73ca90882aedb4.jpg" alt="">

                                        {{--                                        <ul class="list">--}}
{{--                                            <li><a href="#">艺术与插画</a></li>--}}
{{--                                            <li><a href="#">绘本制作</a></li>--}}
{{--                                            <li><a href="#">艺术二维码</a></li>--}}
{{--                                            <li><a href="#">公开课</a></li>--}}
{{--                                        </ul>--}}
                                    </div>
                                </div>
                            </div>

                            <!--minor 公众号-->
                            <div class="footer-column col-xl-4 col-lg-3 col-md-6 col-sm-12">
                                <div class="footer-widget activites-widget">
                                    <h4 class="widget-title">公众号二维码</h4>
                                    <div class="widget-content">
                                        <img src="http://i2.tiimg.com/703561/67d60a302ec6f957.jpg" alt="">
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <!-- <div class="footer-column col-xl-5 col-lg-6 col-md-12 col-sm-12">
                                <div class="footer-widget newsletter-widget">
                                    <h4 class="widget-title">通讯</h4>
                                    <div class="newsletter-form">
                                        <form method="post" action="contact.html">
                                            <div class="form-group">
                                                <input type="email" name="email" value="" placeholder="请输入您的邮箱,方便联系" required="">
                                                <button type="submit" class="theme-btn btn-style-one">订阅</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer Bottom-->
        <div class="footer-bottom">

            <div class="auto-container">
                <!-- <ul class="social-icon-colored">
                    <li><a href="#"><span class="fab fa-weixin"></span></a></li>
                    <li><a href="#"><span class="fab fa-weibo"></span></a></li>
                    <li><a href="#"><span class="fab fa-qq"></span></a></li>
                </ul> -->
                <div class="copyright"> <a href="http://www.17sucai.com/" title="17sucai">Copyrights</a> &copy; 2019 iminor - 京ICP备19027753号-1</div>
            </div>
        </div>

    </footer>
    <!--End Main Footer-->

</div>
<!--End pagewrapper-->


<!--Search Popup-->
<div id="search-popup" class="search-popup">
    <div class="close-search theme-btn"><span class="fa fa-times"></span></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <form method="post" action="index.html">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>

            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Business</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">SEO</a></li>
                <li><a href="#">Logistics</a></li>
                <li><a href="#">Freedom</a></li>
            </ul>

        </div>

    </div>
</div>


<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--Revolution Slider-->
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="js/main-slider-script.js"></script>
<!--Revolution Slider-->
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/script.js"></script>
<!--Google Map APi Key-->
<script src="http://ditu.google.cn/maps/api/js?key=AIzaSyDcaOOcFcQ0hoTqANKZYz-0ii-J0aUoHjk"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
</body>
</html>
