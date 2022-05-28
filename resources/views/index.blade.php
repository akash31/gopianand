@extends('layout.main')
@section('title', 'Home')
@section('content')
<!-- Start Main Banner Area -->
<div class="home-area home-slides owl-carousel owl-theme">
    <div class="main-banner item-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="main-banner-content">
                        <h1>Shaurashtra Beadwork </h1>


                        <div class="btn-box">
                            <a href="{{action('HomeController@aboutUsAction')}}" class="default-btn">Read More <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-banner item-bg2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="main-banner-content">
                        <h1>Shaurashtra Beadwork </h1>


                        <div class="btn-box">
                            <a href="{{action('HomeController@aboutUsAction')}}" class="default-btn">Read More <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-banner item-bg5">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="main-banner-content">
                        <h1>Shaurashtra Beadwork </h1>


                        <div class="btn-box">
                            <a href="{{action('HomeController@aboutUsAction')}}" class="default-btn">Read More <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Banner Area -->
<br><br><br><br><br><br><br>
<!-- Start Services Boxes Area -->
<section class="services-boxes-area bg-f8f8f8">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-box">
                    <div class="image">
                        <img src="{{url('/')}}/public/assets/img/banner/beadwork1.jpg" alt="image">
                    </div>


                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-box">
                    <div class="image">
                        <img src="{{url('/')}}/public/assets/img/banner/beadwork2.jpg" alt="image">
                    </div>


                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                <div class="single-box">
                    <div class="image">
                        <img src="{{url('/')}}/public/assets/img/banner/beadwork3.jpg" alt="image">
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Boxes Area -->

<!-- Start About Area -->
<section class="about-area ptb-100 bg-f8f8f8">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-title">
                    <span>Gopi Anand Bead Work Collection</span>
                    <h2>@lang('messages.aboutus')</h2>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="about-text">
                    <p>@lang('messages.home_page_aboutus_details')</p>

                    <a href="{{action('HomeController@aboutUsAction')}}" class="read-more-btn">@lang('messages.more_info') <i class="flaticon-right-chevron"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->

<!-- Start Services Area -->
<section class="services-area bg-f8f8f8 pb-70">
    <div class="container">
        <div class="services-slides owl-carousel owl-theme">
            @if(isset($products) && count($products) > 0)
                @foreach($products as $value)
                    <div class="single-services-box">
                        <div class="icon">
                            <div class="icon-image">
                                <img src="{{url('/')}}/public/assets/img/{{$value->image}}">
                            </div>
                        </div>
                        <h3><a href="{{ route('beadworkdetails', ['sku' => $value->sku]) }}">{{$value->title}}</a></h3>
                        <p>{{$value->desc}}</p>
                        <a href="{{ route('beadworkdetails', ['sku' => $value->sku]) }}" class="read-more-btn">@lang('messages.learn_more')</a>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
<!-- End Services Area -->
@endsection