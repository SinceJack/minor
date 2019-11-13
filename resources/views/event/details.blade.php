{{--继承公共模板--}}
@extends('layouts.public')

{{--替换标签标题--}}
@section('title')
    大事记
@endsection

{{--替换当前页信息--}}
@section('location')
    <a href="/events">返回大事记</a>
@endsection

{{--当前页面大标题--}}
@section('pagename')
    {{$event->evetitle}}
@endsection

{{--按钮选中--}}
@section('current3')
    current
@endsection

{{--替换主体内容--}}
@section('content')

    <!-- Event Detail Section -->
    <div class="event-detail-section">
        <div class="auto-container">
            <div class="row">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="event-detail">
                        <!-- Image Box -->
                        <div class="image-box wow fadeIn" style="max-height: 435px;">
                            <a href="/images/resource/{{$event->eveimg}}" class="lightbox-image">
                                <img style="max-width:300px" src="/upload/{{$event->eveimg}}" alt="">
                            </a>
                        </div>

                        <div class="lower-content">
                            <span class="date">活动开始时间：{{$event->evetime}}</span>
                            <h3>{{$event->evetitle}}</h3>
                            {!! $event->evecontent !!}
                        </div>

                        <!-- Other Option -->
                        <div class="post-share-options clearfix">
                            <div class="float-left">
                                <ul class="event-info">
                                    <li><span>发布时间:</span> {{$event->created_at}}</li>
                                    <li><span>地点:</span> {{$event->evelocation}}</li>
                                </ul>
                            </div>

                            <div class="float-right">
                                <ul class="social-icon-colored">
                                    <li><a href="#"><span class="fab fa-weixin"></span></a></li>
                                    <li><a href="#"><span class="fab fa-weibo"></span></a></li>
                                    <li><a href="#"><span class="fab fa-qq"></span></a></li>
                                </ul>
                            </div>
                        </div>

                         <!-- Author Box -->
                        <div class="author-box">
                            <div class="inner-box">
                                <div class="image-box"><img src="/images/resource/team-1.jpg" alt=""></div>
                                <h3 class="name">组织者</h3>
                                <p>极地国际创新中心团队。</p>
                                <ul class="contact-info">
                                    <li><span class="fa fa-phone-square"></span><a href="tel:15910381201">159 1038 1201</a></li>
                                    <li><a href="mailto:739019620@qq.com"><span class="fa fa-envelope"></span>739019620@qq.com</a></li>
                                </ul>
                            </div>
                        </div>

                        <!--Map Box-->
                        <!-- <div class="map-box"> -->
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
                        <!-- </div> -->
                    </div><!-- End Event Detail -->
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar event-sidebar">
                        <!-- Search搜索盒子 -->
                        <!-- <div class="sidebar-widget search-box">
                            <form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search" required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div> -->

                        <!-- Events Widget -->
                        <div class="sidebar-widget search-box events-widget">
                            <div class="sidebar-title"><h5>其他事件</h5></div>
                            <div class="widget-content">
                                <!-- Event Block -->
                                @foreach($eves as $eve)
                                    <div class="event-block-two">
                                        <div class="inner-box">
                                            <figure class="image"><a href="/events/{{$eve->id}}"><img src="/images/resource/{{$eve->eveimg}}" alt=""></a></figure>
                                            <div class="date">{{$eve->evetime}}</div>
                                            <h5><a href="/events/{{$eve->id}}">{{$eve->evetitle}}</a></h5>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Detail Section -->
@endsection
