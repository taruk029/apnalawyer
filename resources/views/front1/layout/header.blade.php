    <!-- main banner -->
    <div class="main-top" id="home">
        <!-- header -->
        <header>
            <div class="container-fluid">
                <div class="header d-lg-flex justify-content-between align-items-center py-3 px-sm-3">
                    <!-- logo -->
                    <div id="logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('logo.png')}}"></a>
                    </div>
                    <!-- //logo -->
                    <!-- nav -->
                    <div class="nav_w3ls">
                        <nav>
                            <label for="drop" class="toggle">Menu</label>
                            <input type="checkbox" id="drop" />
                            <ul class="menu">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('about-us') }}">About Us</a></li>
                                <li><a href="{{ url('services') }}">Services</a></li>
                                <li>
                                    <a href="#">Registration <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-2" />
                                    <ul>
                                        <li><a href="{{ url('lawyer_registration') }}" class="drop-text">Lawyer Register</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- //nav -->
                    <div class="d-flex mt-lg-1 mt-sm-2 mt-3 justify-content-center">
                        <!-- search -->
                        <div class="search-w3layouts mr-3">
                           <a href="javascript:void(0)"><i class="fa fa-phone-square"></i> +91 9807406890</a>
                        </div>
                        <!-- //search -->
                        <!-- download -->
                        <a href="javascript:void(0)"><i class="fa fa-envelope-square"></i> support@apnalawyer.in</a>
                        <!-- //download -->
                    </div>
                </div>
            </div>
        </header>
        <!-- //header -->

        <?php if(Request::segment(1)=="home" || Request::segment(1)=="")
        { ?>
        <!-- banner -->
        <div class="banner_w3lspvt position-relative">
            <div class="container">
                <div class="d-md-flex">
                    <div class="w3ls_banner_txt">
                        <h3 class="w3ls_pvt-title">Apna <br><span>Lawyer</span></h3>
                        <p class="text-sty-banner">Sed ut perspiciatis unde omnis iste natus doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
                        <a href="about.html" class="btn button-style mt-md-5 mt-4">Read More</a>
                    </div>
                    <div class="banner-img">
                        <img src="{{ asset('front1/images/banner.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- animations effects -->
            <div class="icon-effects-w3l">
                <img src="{{ asset('front1/images/shape1.png') }}" alt="" class="img-fluid shape-wthree shape-w3-one">
                <img src="{{ asset('front1/images/shape2.png') }}" alt="" class="img-fluid shape-wthree shape-w3-two">
                <img src="{{ asset('front1/images/shape3.png') }}" alt="" class="img-fluid shape-wthree shape-w3-three">
                <img src="{{ asset('front1/images/shape5.png') }}" alt="" class="img-fluid shape-wthree shape-w3-four">
                <img src="{{ asset('front1/images/shape4.png') }}" alt="" class="img-fluid shape-wthree shape-w3-five">
                <img src="{{ asset('front1/images/shape6.png') }}" alt="" class="img-fluid shape-wthree shape-w3-six">
            </div>
            <!-- //animations effects -->
        </div>
        <!-- //banner -->
    <?php }
    else
    { ?>
    <!-- banner -->
    <div class="banner_w3lspvt-2">
        <ol class="breadcrumb">
            @if(Request::segment(1)=="services")
                <li class="breadcrumb-item"><a href="{{ url('services')}}" class="font-weight-bold">Services</a></li>
            @elseif(Request::segment(1)=="lawyer_registration")
                <li class="breadcrumb-item"><a href="{{ url('lawyer_registration')}}" class="font-weight-bold">Lawyer Registration</a></li>
            @endif

        </ol>
    </div>
<?php } ?>
    <!-- //banner -->
    </div>
    <!-- //main banner -->