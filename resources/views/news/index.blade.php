{{--继承公共模板--}}
@extends('layouts.public')

{{--替换标签标题--}}
@section('title')
    新鲜事儿
@endsection

{{--替换当前页信息--}}
@section('location')
    <a href="/news">新鲜事儿</a>
@endsection

{{--当前页面大标题--}}
@section('pagename')
    新闻
@endsection

{{--按钮选中--}}
@section('current6')
    current
@endsection

{{--替换主体内容--}}
@section('content')
    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
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
                                <div class="btn-box"><a href="/news/{{$new->id}}" class="theme-btn btn-style-one">MORE</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{$news->links()}}
        </div>
    </section>
    <!--End News Section -->
@endsection
