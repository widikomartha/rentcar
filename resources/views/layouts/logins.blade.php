<!DOCTYPE html>
<html lang="en">
<head>
	<title>Docar - @yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<!-- Favicon -->

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
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{asset('assets/login-template/img-01.png')}}" alt="IMG">
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
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script type="text/javascript" src="{{ asset('assets/login-template/js/main.js') }}"></script>
</body>
</html>