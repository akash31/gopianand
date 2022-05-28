<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="icon" type="image/ico" href="{{url('/')}}/public/images/favicon.ico" />

    <title>@yield('title') | GOPIANAND BEADWORK</title>

    <!-- head - CSS files -->
    @include('include.head')
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <img src="{{url('/')}}/public/assets/img/logo.png" alt="logo">

        </div>
    </div>
    <!-- End Preloader -->

    <!-- Start Header Area -->
    @include('include.header')
    <!-- End Top Header -->

    @yield('content')

    <!-- Start Footer Area -->
    @include('include.footer')
    <!-- End Footer Area -->

    <div class="go-top"><i class="fas fa-chevron-up"></i><i class="fas fa-chevron-up"></i></div>

    <!--JS file --START  -->
    @include('include.script')
    <!--JS file --END  -->
</body>
</html>