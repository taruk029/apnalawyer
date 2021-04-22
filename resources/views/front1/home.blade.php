@extends('front1.layout.app')
@section('title', 'ApnaLawyer | Home')
@section('content')

       <!-- what we do section -->
    <div class="what bg-li py-5" id="what">
        <div class="container py-xl-5 py-lg-3">
            <div class="row about-bottom-w3l text-center mt-4">
                <div class="col-lg-4 about-grid">
                    <div class="about-grid-main">
                        <img src="{{ asset('front1/images/img1.png') }}" alt="" class="img-fluid">
                        <h4 class="my-4">Dolor Sit</h4>
                        <p> Ut enim ad minim veniam, quis nostrud.Excepteur sint occaecat cupidatat non proident</p>
                        <a href="about.html" class="button-w3ls btn mt-sm-5 mt-4">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 about-grid my-lg-0 my-5">
                    <div class="about-grid-main">
                        <img src="{{ asset('front1/images/img2.png') }}" alt="" class="img-fluid">
                        <h4 class="my-4">Conse Tetur</h4>
                        <p>Ut enim ad minim veniam, quis nostrud.Excepteur sint occaecat cupidatat non proident</p>
                        <a href="about.html" class="button-w3ls btn mt-sm-5 mt-4">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 about-grid">
                    <div class="about-grid-main">
                        <img src="{{ asset('front1/images/img3.png') }}" alt="" class="img-fluid">
                        <h4 class="my-4">Adip Cing</h4>
                        <p>Ut enim ad minim veniam, quis nostrud.Excepteur sint occaecat cupidatat non proident</p>
                        <a href="about.html" class="button-w3ls btn mt-sm-5 mt-4">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //what we do section -->

    <!-- middle -->
    <section class="midd-w3 py-5" id="faq">
        <div class="container py-xl-5 py-lg-3">
            <div class="row">
                <div class="col-lg-6 about-right-faq">
                    <h6>Business Consultancy</h6>
                    <h3 class="text-da">25 Years of Industry Experience</h3>
                    <p class="mt-4">Integer pulvinar leo id viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel, ultrices in ligula.</p>
                    <ul class="w3l-right-book mt-4">
                        <li>Marketing Base</li>
                        <li>Financial Consulting</li>
                        <li>Investment Advice</li>
                        <li>Business Growth</li>
                        <li>Technical Support</li>
                    </ul>
                    <a href="about.html" class="btn button-style button-style-2 mt-sm-5 mt-4">Read More</a>
                </div>
                <div class="col-lg-6 left-wthree-img text-right">
                    <img src="{{ asset('front1/images/b1.png') }}" alt="" class="img-fluid mt-5" />
                </div>
            </div>
        </div>
    </section>
    <!-- //middle -->

    <!-- services -->
    <section class="banner-bottom-w3layouts bg-li py-5" id="services">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="tittle text-center font-weight-bold">Our Services</h3>
            <p class="sub-tittle text-center mt-3 mb-sm-5 mb-4">Sed do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            <div class="row pt-lg-4">
                <div class="col-lg-4 about-in text-center">
                    <div class="card">
                        <div class="card-body">
                            <div class="bg-clr-w3l">
                                <span class="fa fa-line-chart"></span>
                            </div>
                            <h5 class="card-title mt-4 mb-3">Business Growth</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 about-in text-center my-lg-0 my-3">
                    <div class="card active">
                        <div class="card-body">
                            <div class="bg-clr-w3l">
                                <span class="fa fa-usd"></span>
                            </div>
                            <h5 class="card-title mt-4 mb-3">Financial Planning</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 about-in text-center">
                    <div class="card">
                        <div class="card-body">
                            <div class="bg-clr-w3l">
                                <span class="fa fa-lightbulb-o"></span>
                            </div>
                            <h5 class="card-title mt-4 mb-3">Business Services</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //services -->

    <!-- stats -->
    <section class="bottom-count py-5" id="stats">
        <div class="container py-xl-5 py-lg-3">
            <div class="row">
                <div class="col-lg-5 left-img-w3ls">
                    <img src="{{ asset('front1/images/b2.png') }}" alt="" class="img-fluid" />
                </div>
                <div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
                    <div class="bott-w3ls mr-xl-5">
                        <h3 class="title-w3 text-bl mb-3 font-weight-bold">Some of Company Real Facts</h3>
                        <p class="title-sub-2 mb-3">Excepteur sint occaecat cupidatat <br>non proident.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium. </p>
                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-4 count-w3ls">
                            <h4>1000+</h4>
                            <p>Project completed</p>
                        </div>
                        <div class="col-sm-4 count-w3ls mt-sm-0 mt-3">
                            <h4>480+</h4>
                            <p>Consultant</p>
                        </div>
                        <div class="col-sm-4 count-w3ls mt-sm-0 mt-3">
                            <h4>600+</h4>
                            <p>Award Winning</p>
                        </div>
                    </div>
                    <div class="row mt-sm-5 mt-4">
                        <div class="col-sm-4 count-w3ls">
                            <h4>480+</h4>
                            <p>Consultant</p>
                        </div>
                        <div class="col-sm-4 count-w3ls mt-sm-0 mt-3">
                            <h4>600+</h4>
                            <p>Award Winning</p>
                        </div>
                        <div class="col-sm-4 count-w3ls mt-sm-0 mt-3">
                            <h4>1000+</h4>
                            <p>Project completed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats -->

    <!-- partners -->
    <section class="partners py-5" id="partners">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="tittle text-center font-weight-bold">Our Partners</h3>
            <p class="sub-tittle text-center mt-3 mb-sm-5 mb-4">Sed do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            <div class="row grid-part text-center pt-4">
                <div class="col-md-2 col-4">
                    <div class="parts-w3ls">
                        <a href="#"><span class="fa fa-angellist"></span></a>
                        <h4>Angellist</h4>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="parts-w3ls">
                        <a href="#"><span class="fa fa-opencart"></span></a>
                        <h4>opencart</h4>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="parts-w3ls">
                        <a href="#"><span class="fa fa-lastfm"></span></a>
                        <h4>lastfm</h4>
                    </div>
                </div>
                <div class="col-md-2 col-4 mt-md-0 mt-4">
                    <div class="parts-w3ls">
                        <a href="#"><span class="fa fa-openid"></span></a>
                        <h4>openid</h4>
                    </div>
                </div>
                <div class="col-md-2 col-4 mt-md-0 mt-4">
                    <div class="parts-w3ls">
                        <a href="#"><span class="fa fa-skyatlas"></span></a>
                        <h4>skyatlas</h4>
                    </div>
                </div>
                <div class="col-md-2 col-4 mt-md-0 mt-4">
                    <div class="parts-w3ls">
                        <a href="#"><span class="fa fa-ravelry"></span></a>
                        <h4>ravelry</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //partners -->
@endsection
@push('scripts')
@endpush