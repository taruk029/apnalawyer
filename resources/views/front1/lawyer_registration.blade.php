@extends('front1.layout.app')
@section('title', 'ApnaLawyer | Lawyer Registration')
@section('content')     
<!-- contact -->
<div class="contact py-5" id="contact">
<div class="container pb-xl-5 pb-lg-3">
    <div class="row">
        <div class="col-lg-12 mt-lg-0 mt-5">
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
            <!-- contact form grid -->
            <div class="contact-top1">
                <form action="{{url('register_lawyer')}}" method="post" id="signupForm" enctype="multipart/form-data" class="contact-wthree-do">
                 {{ csrf_field() }}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    First name
                                </label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                            </div>
                            <div class="col-md-6 mt-md-0 mt-4">
                                <label>
                                    Last name
                                </label>
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    Mobile
                                </label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Mobile" onkeypress="return NumbersOnly(event,this)" maxlength="10">
                            </div>
                            <div class="col-md-6 mt-md-0 mt-4">
                                <label>
                                    Email
                                </label>
                               <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    Experience <small>( in years )</small>
                                </label>
                                <select class="form-control" id="text" name="experience" >
                                    <option value="">Select Experience</option>
                                    @foreach($experience as $rows)
                                        <option value="<?php echo $rows->id; ?>"><?php echo $rows->experience; ?></option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-4">
                                <label>
                                    Registration Number
                                </label>
                               <input type="text" class="form-control" id="registration_number" name="registration_number" placeholder="Registration Number">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    Gender
                                </label><br>
                                <input type="radio" name="gender" checked onclick="javascript:set_gender(1)">
                                <label>Male</label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="gender" onclick="javascript:set_gender(2)">
                                <label>Female</label>
                                <input type="hidden" name="selected_gender" id="selected_gender" value="1">
                            </div>
                            <div class="col-md-6">
                                <label>
                                    Marital Status
                                </label><br>
                                <input type="radio" name="marital" checked onclick="javascript:set_marital(1)">
                                <label>Married</label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="marital" onclick="javascript:set_marital(2)">
                                <label>Unmarried</label>
                                <input type="hidden" name="selected_marital" id="selected_marital" value="1">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    Select State
                                </label>
                                <select class="form-control" id="state" name="state" onchange="javascript:get_city()">
                                    <option value="">Select Your State</option>
                                    @foreach($state as $row)
                                        <option value="{{ $row->id }}">
                                            {{ $row->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>
                                    Is Online Active
                                </label><br>
                                <input type="radio" name="online" checked  onclick="javascript:set_online(1)">
                                 <label>Yes</label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="online"  onclick="javascript:set_online(2)">
                                <label>No</label>
                                <input type="hidden" name="selected_online" id="selected_online" value="1">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    Select Courts:
                                </label>
                                <select multiple class="form-control" id="court" name="court[]" required="required" >
                                    <option value="1" onclick="javascript:get_court(0)" >Supreme Court</option>
                                    <option value="2" onclick="javascript:get_court(1)" >High Court</option>
                                    <option value="3" onclick="javascript:get_court(2)" >District Court</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>
                                    Select Categories
                                </label>
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
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6" id="district_court_div" style="display: none;">
                                <label>
                                    Select District Courts
                                </label>
                                <select multiple class="form-control" id="district_court" name="district_court[]">
                                </select>
                            </div>
                            <div class="col-md-6" id="high_court_div" style="display: none;">
                                <label>
                                    Select High Courts
                                </label>
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
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    Mobile
                                </label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Mobile" onkeypress="return NumbersOnly(event,this)" maxlength="10">
                            </div>
                            <div class="col-md-6 mt-md-0 mt-4">
                                <label>
                                    Email
                                </label>
                               <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-cont-w3 btn-block mt-4">Send</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- //contact form grid ends here -->
        </div>
    </div>
</div>
</div>
<!-- //contact-->
@endsection
@push('scripts')
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
    //alert($('#court option:selected').html());
    if(state!="")
    {
        var kra_list = [];
        $.each($("#court option:selected"), function()
        {            
            kra_list.push($(this).val());
        });
        var list = kra_list.join(", ");
        
        if(list.includes(2))
            alert("aao");
        else if(list.includes(3))
            alert("aa");
        /*$('#court option').each(function() {
            if (this.selected)
            {
               var selector = $(this).val(); 
               alert($(this).prop("selected")); 
               if(selector==2)
                {
                    if($("#court option:selected").text() == "High Court")     
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
                else if(selector==3)
                {
                    if($("#court option:selected").text() == "District Court")     
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
        });*/           
    }
    else
    {
        alert("Please select your state first.");
        $("option:selected").prop("selected", false)
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
                
                $("#district_court").html('');
                for (var i = 0; i < count; i++) { 
                    all += '<option value="'+ data[i].id +'">'+ data[i].name +'</option>'; 
                }
               
                $("#district_court").html(all);
                $.unblockUI();
            }
        });
    }
    else
    {
        $("#district_court option").remove();
    }
}


/*    $(document).ready(function() 
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
});*/

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