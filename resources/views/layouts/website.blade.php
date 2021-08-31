<!DOCTYPE html>
<html lang="en">
<head>
	<title>Book your free consultation || Boom Gym</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('website/images/logo.png') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('website/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('website/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('website/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('website/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('website/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('website/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('website/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('website/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('website/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('website/css/main.css') }}">
<!--===============================================================================================-->

    <meta name="theme-color" content="#dd1416">
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url({{ asset('website/images/bg-02.jpeg') }});">
                <span class="logo">
                    <img src="{{ asset('website/images/logo.png') }}" alt="Boom Gym Logo">
                </span>
				<span class="contact100-form-title-1">
					Book your free consultation
				</span>

				<span class="contact100-form-title-2">
					An enlite team of handpicked personal trainers and nutritionists are waiting at a world-class facility to help you acieve your body transformation and fitness goals.
				</span>
			</div>

			@yield('content')
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="{{ asset('website/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('website/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('website/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('website/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('website/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('website/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('website/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('website/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('website/js/main.js') }}"></script>


</body>
</html>
