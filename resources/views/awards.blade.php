@extends('layout.main')
@section('title', 'Awards')
@section('content')
<section class="blog-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a href="#"><img src="{{url('/')}}/public/assets/img/blog-image/a1.jpg" alt="image"></a>
                    </div>
                    <div class="post-content">
                        <h3><a href="#">@lang('messages.award_1')</a></h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a href="#"><img src="{{url('/')}}/public/assets/img/blog-image/a2.jpg" alt="image"></a>
                    </div>
                    <div class="post-content">
                        <h3><a href="#">@lang('messages.award_2')</a></h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a href="#"><img src="{{url('/')}}/public/assets/img/blog-image/a3.jpg" alt="image"></a>
                    </div>
                    <div class="post-content">
                        <h3><a href="#">@lang('messages.award_3')</a></h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a href="#"><img src="{{url('/')}}/public/assets/img/blog-image/a4.jpg" alt="image"></a>
                    </div>

                    <div class="post-content">
                        <h3><a href="#">@lang('messages.award_4')</a></h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a href="#"><img src="{{url('/')}}/public/assets/img/blog-image/a5.jpg" alt="image"></a>
                    </div>
                    <div class="post-content">
                        <h3><a href="#">@lang('messages.award_5')</a></h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a href="#"><img src="{{url('/')}}/public/assets/img/blog-image/a6.jpg" alt="image"></a>
                    </div>
                    <div class="post-content">
                        <h3><a href="#">@lang('messages.award_6')</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
