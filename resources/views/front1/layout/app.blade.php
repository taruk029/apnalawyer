<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>@yield('title')</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="ApnaLawyer, Lawyer, Law queries, Legal, kanoon" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="{{ asset('front1/css/bootstrap.css') }}">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="{{ asset('front1/css/style.css') }}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href="{{ asset('front1/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //Custom-Files -->

    <!-- Web-Fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext"
     rel="stylesheet">
     <link rel="shortcut icon" href="{{ asset('favicon.ico')}}" type="image/x-icon">
<link rel="icon" href="{{ asset('favicon.ico')}}" type="image/x-icon">
    <!-- //Web-Fonts -->
</head>

<body>
@include('front1.layout.header')
@yield('content')
@include('front1.layout.footer')
<script src="{{ asset('front/js/jquery/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.validate.js') }}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
<script src="{{ asset('front/js/additional-methods.js') }}"></script>
<script src="{{ asset('front/js/block_ui.js') }}"></script> 
@stack('scripts')
<script>    
function NumbersOnly(evt,obj) {
var charCode = (evt.which) ? evt.which : evt.keyCode;
if (charCode > 31 && (charCode < 48 || charCode > 57)) {
    return false;
} else {
    if(charCode != 32)
    {
        return true;
    }
    else
    {
        return false;
    }
}
}
function isDecimal(evt,obj) {
var charCode = (evt.which) ? evt.which : evt.keyCode;
if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57)) {
    return false;
} else {
    if(charCode != 32)
    {
        return true;
    }
    else
    {
        return false;
    }
}
}


function skip_space(evnt,obj) {
var charCode = (evnt.which) ? evnt.which : evnt.keyCode;
if (charCode == 32) {
    return false;
}
    }
</script>
</body>
</html>