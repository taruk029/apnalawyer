@extends('front1.layout.app')
@section('title', 'ApnaLawyer | Services')
@section('content')
<style type="text/css">
    .prices{
    padding: 10px 0 !important;
    text-align: center;
    border-bottom: 1px solid #ddd;
    }
</style>
<!-- price -->
<div class="price-sec">
    <div class="container py-xl-5 py-lg-3">
        <div class="inner_sec_info_w3_info mt-3">
            <div class="row price-grid-main">
                @if($category)
                    @foreach($category as $row) 
                    <div class="col-lg-3 col-sm-6 price-info"  title="{{ $row->category }}" >
                        
                    <a href="{{ url('lawyers/'.base64_encode($row->id)) }}">
                        <div class="prices">
                            <div class="prices-bottom text-center">
                                <div class="prices-h px-2">
                                   <h5>{{ $row->category }}</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
<!-- //price -->
@endsection
@push('scripts')
<script>

$(document).ready(function(){

$('.container').each(function(){  
    var highestBox = 0;

    $(this).find('.prices').each(function(){
        if($(this).height() > highestBox){  
            highestBox = $(this).height();  
        }
    })

    $(this).find('.prices').height(highestBox);
});    


});
</script>
@endpush