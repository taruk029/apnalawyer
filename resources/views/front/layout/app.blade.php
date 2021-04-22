<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('front/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/validation/screen.css') }}">
    <link rel="stylesheet" href="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('favicon.ico')}}" type="image/x-icon">
<link rel="icon" href="{{ asset('favicon.ico')}}" type="image/x-icon">
    @stack('styles')
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    @include('front.layout.header')
    @yield('content')
    @include('front.layout.footer')

    

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('front/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('front/js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('front/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('front/js/plugins/plugins.js') }}"></script>
    
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    <!-- Active js -->
    <script src="{{ asset('front/js/active.js') }}"></script>
    <script src="{{ asset('front/js/jquery.validate.js') }}"></script>
    <script src="{{ asset('front/js/additional-methods.js') }}"></script>
    <script src="{{ asset('front/js/block_ui.js') }}"></script> 
    <script type="text/javascript">
        setTimeout(function(){ $("#alert_notify").fadeOut(); }, 5000);
    </script>
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