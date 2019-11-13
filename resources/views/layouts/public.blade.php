<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>美萌 - 为生活创造美 | @yield('title')</title>
    <!-- Stylesheets -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="http://i2.tiimg.com/703561/9671b127ed5ce3f3.jpg" type="image/x-icon">
    <link rel="icon" href="http://i2.tiimg.com/703561/9671b127ed5ce3f3.jpg" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
    <!-- Preloader -->
{{--    <div class="preloader"></div>--}}

    <!-- Main Header -->
    <header class="main-header">
        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="nav-outer clearfix">
                    <ul class="info-box clearfix">
                        <li><a href="tel:19110375125">191 1037 5125 <span class="fa fa-phone-square"></span></a></li>    <li><a href="mailto:739019620@qq.com"><span class="fa fa-envelope"></span>739019620@qq.com</a></li>
                    </ul>

                    <div class="responsive-logo"><a href="/"><img src="http://i1.fuimg.com/703561/a723f1f12abb2b96.png" alt="" title="Bebio - Kinder Garten HTML Template"></a></div>

                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="navbar-header">
                            <!-- Togg le Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon flaticon-menu-button"></span>
                            </button>
                        </div>

                        {{--  顶部导航  --}}
                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="@yield('dropdown')"><a href="/">首页 ❤</a></li>
                                <li class="@yield('current2')"><a href="/about">关于 ✰</a></li>
                                <li class="@yield('current3')"><a href="/events">事记 ☾</a></li>
                                <li class="@yield('current4')"><a href="/programs">课程 ♪</a></li>
                                <li class="@yield('current5')"><a href="/gallery">画廊 (˘͈ᵕ ˘͈❀)</a></li>
                                <li class="@yield('current6')"><a href="/news">新闻 ( ᵒ̴̶̷̤໐ᵒ̴̶̷̤ )</a></li>
                                {{--<li class="dropdown"><a href="/contact">联系我们</a></li>--}}
                            </ul>
                        </div>

                    </nav>
                    <!-- Main Menu End-->
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Header Lower -->
        <div class="header-lower">
            <div class="auto-container">
                <div class="outer-box">
                    <!-- Option Box -->
                    <div class="option-box">
                        <ul class="clearfix">
                            <!-- <li class="search-box-btn"><span class="icon fa fa-search"></span></li> -->
                            <li><a href="mailto:739019620@qq.com"><span class="fa fa-envelope"></span></a></li>
                        </ul>
                    </div>

                    <!--Logo-->
                    <div class="logo-outer">
                        <div class="logo"><a href="/"><img src="http://i1.fuimg.com/703561/a723f1f12abb2b96.png" alt="" title="Bebio - Kinder Garten HTML Template"></a></div>
                    </div>

                    {{--  社交账号  --}}
                    <ul class="social-icon-colored">
{{--                        <li><a href="#"><span class="fab fa-weixin"></span></a></li>--}}
                        <li><a href="https://weibo.com/u/5148892197"><span class="fab fa-weibo"></span></a></li>
{{--                        <li><a href="#"><span class="fab fa-qq"></span></a></li>--}}
                    </ul>
                </div>
            </div>
        </div>

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
                            {{--  顶部导航条2  --}}
                            <ul class="navigation clearfix">
                                <li class="@yield('dropdown')"><a href="/">首页 ❤</a></li>
                                <li class="@yield('current2')"><a href="/about">关于 ✰</a></li>
                                <li class="@yield('current3')"><a href="/events">事记 ☾</a></li>
                                <li class="@yield('current4')"><a href="/programs">课程 ♪</a></li>
                                <li class="@yield('current5')"><a href="/gallery">画廊 (˘͈ᵕ ˘͈❀)</a></li>
                                <li class="@yield('current6')"><a href="/news">新闻 ( ᵒ̴̶̷̤໐ᵒ̴̶̷̤ )</a></li>
                                {{--<li class="dropdown"><a href="/contact">联系我们</a></li>--}}
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    </header>
    <!-- End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url('http://i2.tiimg.com/703561/50b3cd644681437b.jpg');">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">主页</a></li>
                    <li>@yield('location')</li>
                </ul>
                <h1>@yield('pagename')</h1>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- main info-->
    @yield('content')
    <!--End main info -->

    <!--Main Footer-->
    @include('layouts.footer')
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


<script src="/js/jquery.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery-ui.js"></script>
<script src="/js/jquery.fancybox.js"></script>
<script src="/js/owl.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/appear.js"></script>
<script src="/js/parallax.min.js"></script>
<script src="/js/script.js"></script>
</body>
</html>
