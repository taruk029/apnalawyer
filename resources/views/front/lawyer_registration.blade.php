@extends('front.layout.app')
@section('title', 'Lawyer Registration')
@section('content')
@push('styles')
<style type="text/css">
    ul.multiselect-container
    {
        transform: translate3d(0px, 0px, 0px) !important;
        max-height: 200px;
        overflow-y: scroll;
        top: 35px  !important;
    }
    .multiselect-container div.checkbox {
    margin: 0;
    margin-right: 5px;
}
.multiselect-container label {
    margin: 0;
    white-space: nowrap;
}
.multiselect-container div.checkbox {
    padding: 5px 15px 5px 35px;
}
button.multiselect {
  background-color: initial;
  border: 1px solid #ced4da;
}
label { font-weight: 600; }
.timepicker {
        background: #fff;
}
</style>
@endpush
       <!-- ##### Catagory Area Start ##### -->
    <div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="background-image: url({{ asset('front/img/bg-img/test.jpg') }});">
        <div class="blog-details-headline">
            <h3>Apna Lawyer</h3>
            <div class="meta d-flex align-items-center justify-content-center">
                <a href="#">Registration</a>
                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                <a href="#">Lawyer</a>
            </div>
        </div>
    </div>
    <!-- ##### Catagory Area End ##### -->

    <!-- ##### Blog Details Content ##### -->
    <div class="blog-details-content section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <!-- Blog Details Text -->
                    <div class="blog-details-text">
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
                        <form action="{{url('register_lawyer')}}" method="post" id="signupForm" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Mobile" onkeypress="return NumbersOnly(event,this)" maxlength="10">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <select class="form-control" id="text" name="experience" >
                                            <option value="">Select Experience</option>
                                            <?php for($i=0;$i<=60; $i++)
                                            { ?>
                                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="registration_number" name="registration_number" placeholder="Registration Number">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6 col-md-6">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-4 col-md-4">
                                            <label>Gender:</label>
                                        </div>
                                        <div class="col-sm-12 col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <input type="radio" name="gender" checked onclick="javascript:set_gender(1)">
                                                <label>Male</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <input type="radio" name="gender" onclick="javascript:set_gender(2)">
                                                <label>Female</label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="selected_gender" id="selected_gender" value="1">
                                </div>
                                <div class="col-sm-12 col-lg-6 col-md-6">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-4 col-md-4">
                                            <label>Marital Status:</label>
                                        </div>
                                        <div class="col-sm-12 col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <input type="radio" name="marital" checked onclick="javascript:set_marital(1)">
                                                <label>Married</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <input type="radio" name="marital" onclick="javascript:set_marital(2)">
                                                <label>Unmarried</label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="selected_marital" id="selected_marital" value="1">
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <select class="form-control" id="state" name="state" onchange="javascript:get_city()">
                                            <option value="">Select Your State</option>
                                            @foreach($state as $row)
                                                <option value="{{ $row->id }}">
                                                    {{ $row->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6 col-md-6">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-4 col-md-4">
                                            <label>Your Image:</label>
                                        </div>
                                        <div class="col-sm-12 col-lg-4 col-md-4">
                                            <div class="form-group">
                                             <input type="file" name="image" style="border:none;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-12 col-md-12">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-3 col-md-3">
                                            <label>Select Courts:</label>
                                        </div>
                                        <div class="col-sm-12 col-lg-9 col-md-9">
                                            <div class="form-group">
                                                <select multiple class="form-control" id="court" name="court[]" required="required" onclick="">
                                                    <option value="1">Supreme Court</option>
                                                    <option value="2">High Court</option>
                                                    <option value="3">District Court</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-12 col-md-12" id="district_court_div" style="display: none;">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-3 col-md-3">
                                            <label>Select District Courts:</label>
                                        </div>
                                        <div class="col-sm-12 col-lg-9 col-md-9">
                                            <div class="form-group">
                                                <select multiple class="form-control" id="district_court" name="district_court[]">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-12 col-md-12" id="high_court_div" style="display: none;">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-3 col-md-3">
                                            <label>Select High Court:</label>
                                        </div>
                                        <div class="col-sm-12 col-lg-5 col-md-5">
                                            <div class="form-group">
                                                <select class="form-control" id="high_court" name="high_court">
                                                    <option value="">Select High Court</option>
                                                    @foreach($high_court as $row)
                                                        <option value="{{ $row->id }}">
                                                            {{ $row->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-12 col-md-12">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-3 col-md-3">
                                            <label>Select Categories:</label>
                                        </div>
                                        <div class="col-sm-12 col-lg-9 col-md-9">
                                            <div class="form-group">
                                                <select multiple class="form-control" id="category_list" name="category_list[]" required="required">
                                            @foreach($category as $row)
                                                <option value="{{ $row->id }}">
                                                    {{ $row->category }}
                                                </option>
                                            @endforeach
                                        </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-12 col-md-12">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-3 col-md-3">
                                            <label>Select Weekdays Availability:</label>
                                        </div>
                                        <div class="col-sm-12 col-lg-9 col-md-9">
                                            <div class="form-group">
                                            <select multiple class="form-control" id="days_availability" name="days_availability[]" required="required">
                                                @foreach($days as $rowd)
                                                    <option value="{{ $rowd->id }}">
                                                        {{ $rowd->day }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-12 col-md-12">
                                    <div class="row">
                                        <div class="col-sm-6 col-lg-3 col-md-3">
                                            <label>Time Available From:</label>
                                        </div>
                                        <div class="col-sm-6 col-lg-3 col-md-3">
                                            <div class="form-group">
                                               <div class="input-group timepicker">
                                                    <input type="text" class="form-control" readonly name="time_available_from" placeholder="Select Time Available From">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3 col-md-3">
                                            <label>Time Available To:</label>
                                        </div>
                                        <div class="col-sm-6 col-lg-3 col-md-3">
                                            <div class="form-group">
                                               <div class="input-group timepicker">
                                                    <input type="text" class="form-control" readonly name="time_available_to"  placeholder="Select Time Available To">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-12 col-md-12">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-3 col-md-3">
                                            <label>Is Online Active:</label>
                                        </div>
                                        <div class="col-sm-12 col-lg-2 col-md-2">
                                            <div class="form-group">
                                                <input type="radio" name="online" checked  onclick="javascript:set_online(1)">
                                                <label>Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-2 col-md-2">
                                            <div class="form-group">
                                                <input type="radio" name="online"  onclick="javascript:set_online(2)">
                                                <label>No</label>
                                            </div>
                                        </div>
                                    </div>
                                     <input type="hidden" name="selected_online" id="selected_online" value="1">
                                </div>
                                <div class="col-sm-12 col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="address" class="form-control" id="address" cols="30" rows="2" placeholder="Address"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-12 col-md-12">
                                    <input type="submit" class="btn clever-btn w-100" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
 <script src="{{ asset('front/js/plugins/bootstrap-multiselect.min.js') }}"></script>
<script>

function set_gender(id)
{
    $("#selected_gender").val(id);
}
function set_marital(id)
{
    $("#selected_marital").val(id);
}
function set_online(id)
{
    $("#selected_online").val(id);
}

$().ready(function() {
        // validate signup form on keyup and submit
        $("#signupForm").validate({
            rules: {
                first_name: "required",
                last_name: "required",
                phone: "required",
                city: "required",
                experience: "required",
                category_list: "required"
            }
        });
});
function get_court(id)
{
    var state = $("#state").val();
    var selector = "multiselect-"+id;   
    if(state!="")
    {
               
        if(id==1)
        {
            if($("#"+selector).is(':checked')==true)     
            {
                $("#high_court_div").css("display", "block");
                $("#high_court").attr("required", "required");            
            }
            else
            {
                $("#high_court_div").css("display", "none");
                $("#high_court").removeAttr("required");
            }
        }
        else if(id==2)
        {
            if($("#"+selector).is(':checked')==true)     
            {            
                $("#district_court_div").css("display", "block");
                $("#district_court").attr("required", "required");           
            }
            else
            {           
                $("#district_court_div").css("display", "none");
                $("#district_court").removeAttr("required");
            }
        }
        else
        {
            $("#high_court").removeAttr("required");
            $("#high_court_div").css("display", "none");
            $("#district_court_div").css("display", "none");
            $("#district_court").removeAttr("required");
        }
    }
    else
    {
        alert("Please select your state first.");
        $("#"+selector).prop("checked", false);
        $("#state").focus();
    }
}
function get_city()
{
    var state = $("#state").val();
    if(state!="")
    {
        $.blockUI({ message: "<i class='fa fa-2x fa-spinner fa-spin' aria-hidden='true' ></i> &nbsp; <h6>Loading... a moment please.</h6>" });
        $.ajax({
            url: "{{ url('get_city') }}",
            type: 'GET',
            data: {id:state},            
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success:function(data){
               
                data = JSON.parse(data);
                var count = Object.keys(data).length;
                var all = '';
                
                $("#district_court").multiselect('destroy');
                for (var i = 0; i < count; i++) { 
                    all += '<option value="'+ data[i].id +'">'+ data[i].name +'</option>'; 
                }
               
                $("#district_court").html(all);
                $.unblockUI();
                $('#district_court').multiselect({
                    templates: { // Use the Awesome Bootstrap Checkbox structure
                        li: '<li><div class="checkbox"><label></label></div></li>'
                    }
                });
                $('.multiselect-container div.checkbox').each(function (index) {

                    var id = 'multiselect-' + index,
                        $input = $(this).find('input');

                    // Associate the label and the input
                    $(this).find('label').attr('for', id);  
                    $input.attr('id', id);        
                });
            }
        });
    }
    else
    {
        $("#district_court option").remove();
    }
}


    $(document).ready(function() 
    {
    
    $('#category_list').multiselect({
        templates: { // Use the Awesome Bootstrap Checkbox structure
            li: '<li><div class="checkbox"><label></label></div></li>'
        }
    });
    $('.multiselect-container div.checkbox').each(function (index) {

        var id = 'multiselect-' + index,
            $input = $(this).find('input');

        // Associate the label and the input
        $(this).find('label').attr('for', id);  
        $input.attr('id', id);        
    });
});

    $(document).ready(function() {
    
    $('#court').multiselect({
        templates: { // Use the Awesome Bootstrap Checkbox structure
            li: '<li><div class="checkbox"><label></label></div></li>'
        }
    });
    $('.multiselect-container div.checkbox').each(function (index) {

        var id = 'multiselect-' + index,
            $input = $(this).find('input');

        // Associate the label and the input
        $(this).find('label').attr('for', id);  
        $input.attr('id', id);        
        $input.attr('onclick', 'javascript:get_court('+index+')');        
    });
});

    var defaults = {
    showClear: false,
    showClose: false,
    allowInputToggle: true,
    useCurrent: false,
    ignoreReadonly: true,
    icons: {
        time: 'fa fa-clock-o',
        date: 'fa fa-calendar',
        up: 'fa fa-angle-up',
        down: 'fa fa-angle-down',
        previous: 'fa fa-angle-left',
        next: 'fa fa-angle-right',
        today: 'fa fa-dot-circle-o',
        clear: 'fa fa-trash',
        close: 'fa fa-times'
    }
};

    $(function() 
    {   
        var optionsTime = $.extend({}, defaults, {format: 'LT'});    
        $('.timepicker').datetimepicker(optionsTime);
    });
</script>
@endpush