{{--继承公共模板--}}
@extends('layouts.public')

{{--替换标签标题--}}
@section('title')
    新鲜事儿
@endsection

{{--替换当前页信息--}}
@section('location')
    <a href="/news">返回新鲜事儿</a>
@endsection

{{--当前页面大标题--}}
@section('pagename')
    {{$new->newstitle}}
@endsection

{{--按钮选中--}}
@section('current6')
    current
@endsection

{{--替换主体内容--}}
@section('content')

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="news-detail">
                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image wow fadeIn"><img src="/upload/{{$new->newspicture}}" alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <ul class="post-info">
{{--                                        <li><span class="fa fa-pencil-alt"></span><a href="/user/{{$new->user_id}}">由 {{$new->user_id}} 发布</a></li>--}}
                                        <li><span class="fa fa-calendar-alt"></span><a href="news-single.html">{{$new->created_at}}</a></li>
                                        <li><span class="fa fa-comments"></span><a href="news-single.html">{{$new->comments_count}} 条回复</a></li>
                                    </ul>
                                    <h3>{{$new->newstitle}}</h3>
                                    <p>
                                        {!! $new->newscontent !!}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Other Option -->
{{--                        <div class="post-share-options clearfix">--}}
{{--                            <div class="float-left">--}}
{{--                                <ul class="tags">--}}
{{--                                    <li class="title">标签:</li>--}}
{{--                                    <li><a href="#">教育</a></li>--}}
{{--                                    <li><a href="#">选址</a></li>--}}
{{--                                    <li><a href="#">绘本</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}

{{--                            <div class="float-right">--}}
{{--                                <ul class="social-icon-colored">--}}
{{--                                    <li><a href="#"><span class="fab fa-weixin"></span></a></li>--}}
{{--                                    <li><a href="#"><span class="fab fa-weibo"></span></a></li>--}}
{{--                                    <li><a href="#"><span class="fab fa-qq"></span></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <!-- Author Box -->
{{--                        <div class="author-box style-two">--}}
{{--                            <div class="inner-box">--}}
{{--                                <div class="image-box"><img src="/images/resource/author-img.jpg" alt=""></div>--}}
{{--                                <h3 class="name">@flyer</h3>--}}
{{--                                <p>美萌绘本馆联合创始人兼技术老师，一个真正的文艺工作者……</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <br><br>
                        <!--Comments Area-->
                        <div class="comments-area">
                            <div class="group-title"><h3>{{$new->comments_count}} 条回复</h3></div>
                            @foreach($new->comments as $comment)
                                <div class="comment-box">
                                    <div class="comment">
{{--                                        <div class="author-thumb"><img src="/images/resource/author-2.jpg" alt=""></div>--}}
                                        <div class="comment-info clearfix"><strong>{{$comment->comauthor}}</strong><div class="comment-time">{{$comment->created_at}}</div></div>
                                        <div class="text">{{$comment->comcontent}}</div>
{{--                                        <div class="reply-outer"><a class="theme-btn reply-btn" href="#">回复</a></div>--}}
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Comment Form -->
                        <div class="comment-form">
                            <div class="group-title"><h3>请留言</h3></div>
                            <!--Comment Form-->
                            <form method="post" action="/news/store">
                                @csrf
                                <div class="row clearfix">
                                    <input type="hidden" name="news_id" value="{{$new->id}}">
                                    <input type="hidden" name="created_at" value="{{date('Y-m-d H:i:s')}}">
                                    <input type="hidden" name="updated_at" value="{{date('Y-m-d H:i:s')}}">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="comauthor" placeholder="您的昵称" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="comphone" placeholder="您的电话" required>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea class="darma" name="comcontent" placeholder="您想说的话"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">发布回复</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--End Comment Form -->
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">
                        <!-- Search -->
                        <!-- <div class="sidebar-widget search-box">
                            <form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="搜索" required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div> -->

                        <!-- Categories -->
{{--                        <div class="sidebar-widget categories search-box">--}}
{{--                            <div class="sidebar-title"><h5>分类树</h5></div>--}}
{{--                            <ul class="category-list">--}}
{{--                                <li class="active"><a href="news-single.html">插画</a></li>--}}
{{--                                <li><a href="news-single.html">绘本</a></li>--}}
{{--                                <li><a href="news-single.html">公开课</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

                        <!-- Post Widget -->
                        <div class="sidebar-widget posts-widget search-box">
                            <div class="sidebar-title"><h5>最近的文章</h5></div>
                            <div class="widget-content">

                                <!-- Post -->
                                @foreach($otherNews as $news)
                                    <article class="post">
                                        <div class="post-inner">
                                            <figure class="image"><a href="/news/{{$news->id}}"><img src="/upload/{{$news->newspicture}}" alt=""></a></figure>
                                            <div class="date"><span class="far fa-calendar-alt"></span> {{$news->created_at}}</div>
                                            <h5><a href="/news/{{$news->id}}">{{$news->newstitle}}</a></h5>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </div>

                        <!-- Tags -->
{{--                        <div class="sidebar-widget popular-tags">--}}
{{--                            <div class="sidebar-title"><h5>热门主题</h5></div>--}}
{{--                            <ul class="tags-list clearfix">--}}
{{--                                <li><a href="#">绘本</a></li>--}}
{{--                                <li><a href="#">公开课</a></li>--}}
{{--                                <li><a href="#">插画</a></li>--}}
{{--                                <li><a href="#">儿插</a></li>--}}
{{--                                <li><a href="#">音乐</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->
@endsection
