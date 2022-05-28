<header class="header-area">

    <!-- Start Top Header -->
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                    <ul class="top-header-nav">

                    </ul>
                </div>

                <div class="col-lg-7 col-md-12">
                    <div class="top-header-right-side">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <span>Drop us an email:</span>
                                <a href="#">maheshusha2605@gmail.com</a>
                            </li>

                            <li>
                                <div class="icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <span>Call us:</span>
                                <a href="#">+91 9601429610</a>
                            </li>

                            <li>
                                <!-- <a href="#" class="default-btn">Get A Quote <span></span></a> -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Header -->

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="pearo-responsive-nav">
            <div class="container">
                <div class="pearo-responsive-menu">
                    <div class="logo">
                        <a href="{{action('HomeController@indexAction')}}">
                            <img src="{{url('/')}}/public/assets/img/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="pearo-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{action('HomeController@indexAction')}}">
                        <img src="{{url('/')}}/public/assets/img/logo.png" alt="logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{action('HomeController@indexAction')}}" class="nav-link {{Route::currentRouteName() == 'index' ? 'active': ''}}">Home </a>
                            </li>

                            <li class="nav-item"><a href="{{action('HomeController@aboutUsAction')}}" class="nav-link {{Route::currentRouteName() == 'about' ? 'active': ''}}">About</a></li>

                            <li class="nav-item"><a href="{{action('HomeController@beadWorkAction')}}" class="nav-link {{(Route::currentRouteName() == 'beadwork' || Route::currentRouteName() == 'beadworkdetails') ? 'active': ''}}">Bead Work </a>
                            </li>

                            <li class="nav-item"><a href="{{action('HomeController@galleryAction')}}" class="nav-link {{Route::currentRouteName() == 'gallery' ? 'active': ''}}">Gallery </a>
                            </li>

                            <li class="nav-item"><a href="{{action('HomeController@awardsAction')}}" class="nav-link {{Route::currentRouteName() == 'awards' ? 'active': ''}}">Awards </a>
                            </li>

                            <li class="nav-item"><a href="{{action('HomeController@contactAction')}}" class="nav-link {{Route::currentRouteName() == 'contact' ? 'active': ''}}">Contact</a></li>
                        </ul>
                        <div class="others-option">
                            <select id="language_id" name="language_id" class="select2-lang change_language" style="margin-top: 8px;">
                                <option value="en"  @if(session('locale')== 'en') selected @endif>English</option>
                                <option value="hi" @if(session('locale')== 'hi') selected @endif>Hindi</option>
                                <option value="gu" @if(session('locale')== 'gu') selected @endif>Gujarati</option>
                            </select>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->

</header>