@extends('layout.main')
@section('title', 'About Us')
@section('content')
<section class="about-area ptb-100 bg-f8f8f8">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-image">
                    <img src="{{url('/')}}/public/assets/img/about-image/about1.jpg" alt="image">
                    <img src="{{url('/')}}/public/assets/img/about-image/about2.jpg" alt="image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="about-content">
                    <!-- <span>About Us</span> -->
                    <h2>@lang('messages.aboutus')</h2>
                    <p align="justify">@lang('messages.aboutus_details_1')</p>
                    <p align="justify">@lang('messages.aboutus_details_2')</p>
                </div>
            </div>
        </div>
        <br>

        <p align="justify">@lang('messages.aboutus_details_3')</p>

        <p align="justify">@lang('messages.aboutus_details_4')</p>






        <div class="about-inner-area">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="about-text-box">
                        <h3>@lang('messages.mission')</h3>
                        <p>@lang('messages.mission_details')</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="about-text-box">
                        <h3>@lang('messages.philosophy_of_life')</h3>
                        <p>@lang('messages.philosophy_of_life_details')</p>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
@endsection