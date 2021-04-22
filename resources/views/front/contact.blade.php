@extends('front.layout.app')
@section('title', 'Lawyer Registration')
@section('content')
@push('styles')
<style type="text/css">
.blog-catagories .single-catagories h6
{
    font-size:12px !important;
}
</style>
@endpush

 <!-- ##### Google Maps ##### -->
    <div class="map-area">
        <section class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style=" z-index:0 !important;background-image: url({{ asset('front/img/bg-img/test.jpg') }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Hero Content -->
                    <!-- <div class="hero-content text-center">
                        <h2>Let's Study Together</h2>
                        <a href="#" class="btn clever-btn">Get Started</a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    </div>

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <!-- Contact Info -->
                <div class="col-12 col-lg-6">
                    <div class="contact--info mt-50 mb-100">
                        <h4>Contact Info</h4>
                        <ul class="contact-list">
                            <li>
                                <h6><i class="fa fa-clock-o" aria-hidden="true"></i> Business Hours</h6>
                                <h6>08:00 AM - 11:00 PM</h6>
                            </li>
                            <li>
                                <h6><i class="fa fa-phone" aria-hidden="true"></i> Number</h6>
                                <h6>+9807406890</h6>
                            </li>
                            <li>
                                <h6><i class="fa fa-envelope" aria-hidden="true"></i> Email</h6>
                                <h6>support@apnalawyer.in</h6>
                            </li>
                            <li>
                                <h6><i class="fa fa-map-pin" aria-hidden="true"></i> Address</h6>
                                <h6>Mstoic Tech Park, D-453, Sector-7 Dwarka, New Delhi 75</h6>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-12 col-lg-6">
                    <div class="contact-form">
                        <h4>Get In Touch</h4>
                        @if(Session::has('error'))
                        <div class="alert alert-danger" role="alert" id="alert_notify">
                          {{ Session::get( 'error' ) }}
                        </div>
                        @endif
                         @if(Session::has('success'))
                        <div class="alert alert-success" role="alert" id="alert_notify">
                          {{ Session::get( 'success' ) }}
                        </div>
                        @endif
                        
                        <form action="{{ url('save_query')}}" method="post">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Full Name">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="number" name="number" placeholder="Your Number">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="city" name="city" placeholder="Your City">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" name="message" cols="30" rows="10" placeholder="Your Query"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn clever-btn w-100">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    @endsection