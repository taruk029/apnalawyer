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

 <!-- ##### Hero Area Start ##### -->
    <section class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="background-image: url({{ asset('front/img/bg-img/test.jpg') }});">
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
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <section class="blog-area blog-page section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="blog-catagories mb-70 d-flex flex-wrap justify-content-between">

                        @if($category)
                            @foreach($category as $row)
                            <!-- Single Catagories -->
                            <div class="single-catagories bg-img" style="background-image: url(img/bg-img/bc1.jpg);">
                                <a href="{{ url('lawyers/'.base64_encode($row->id)) }}">
                                    <h6>{{ $row->category }}</h6>
                                    
                            </div>
                            @endforeach
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Blog Area End ##### -->
    @endsection

    