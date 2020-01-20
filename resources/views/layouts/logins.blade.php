<!DOCTYPE html>
<html lang="en">
<head>
	<title>DoCar - @yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<!-- Favicon -->
    <link rel="icon" href="{!! asset('assets/admin-template/images\favicon.ico') !!}" type="image/x-icon">

<!-- Login css -->
<!--===============================================================================================-->
    <link rel="stylesheet" href="{!! asset('assets/login-template/vendor/bootstrap/css/bootstrap.min.css') !!}">
<!--===============================================================================================-->
    <link rel="stylesheet" href="{!! asset('assets/login-template/fonts/font-awesome-4.7.0/css/font-awesome.min.css') !!}">
<!--===============================================================================================-->
    <link rel="stylesheet" href="{!! asset('assets/login-template/vendor/animate/animate.css') !!}">
<!--===============================================================================================-->	
    <link rel="stylesheet" href="{!! asset('assets/login-template/vendor/css-hamburgers/hamburgers.min.css') !!}">
<!--===============================================================================================-->
    <link rel="stylesheet" href="{!! asset('assets/login-template/vendor/select2/select2.min.css') !!}">
<!--===============================================================================================-->
    <link rel="stylesheet" href="{!! asset('assets/login-template/css/util.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/login-template/css/main.css') !!}">
<!--===============================================================================================-->

</head>
<body>
    <!-- Canvas for particles animation -->
    <div id="particles-js"></div>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
                    <a href="{{route('home') }}"><img src="{{asset('assets/pages-template\corporate\img\logos\docar logo.png')}}" alt="IMG"></a>
				</div>
				@yield('content')
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->	
    <script type="text/javascript" src="{{ asset('assets/login-template/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
    <script type="text/javascript" src="{{ asset('assets/login-template/vendor/bootstrap/js/popper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/login-template/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
    <script type="text/javascript" src="{{ asset('assets/login-template/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
    <script type="text/javascript" src="{{ asset('assets/login-template/vendor/tilt/tilt.jquery.min.js') }}"></script>
    <!-- Particles effect plugin on the right -->
    <script type="text/javascript" src="{{ asset('assets/admin-template/extra-pages\comming-soon\js\particles.js') }}"></script>
    
<!--===============================================================================================-->
    <script type="text/javascript" src="{{ asset('assets/login-template/js/main.js') }}"></script>

    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
</body>
</html>