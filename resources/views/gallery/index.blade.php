{{--继承公共模板--}}
@extends('layouts.public')

{{--替换标签标题--}}
@section('title')
    画廊
@endsection

{{--替换当前页信息--}}
@section('location')
    <a href="/gallery">画廊</a>
@endsection

{{--当前页面大标题--}}
@section('pagename')
    相册
@endsection

{{--按钮选中--}}
@section('current5')
    current
@endsection

{{--替换主体内容--}}
@section('content')
    <!-- Gallery Section -->
    <section class="gallery-section style-two">
        <div class="auto-container">
            <div class="row">
                <!-- Gallery Item -->
                @foreach($gals as $gal)
                    <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                        <div class="image-box">
                            <figure class="image"><img src="/upload/{{$gal->galimg}}" alt=""></figure>
                            <div class="overlay-box">
                                <a href="/upload/{{$gal->galimg}}" class="lightbox-image" data-fancybox='gallery'>
                                    <span class="icon flaticon-add"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $gals->links() }}
        </div>
    </section>
    <!--End Gallery Section -->

@endsection
