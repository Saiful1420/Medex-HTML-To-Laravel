<!DOCTYPE html>
<html lang="en">
<head>
	<title>Medex - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{ asset('/fontEnd/css/animate.css') }}">
	
	<link rel="stylesheet" href="{{ asset('/fontEnd/css/magnific-popup.css') }}">

	<link rel="stylesheet" href="{{ asset('/fontEnd/css/bootstrap-datepicker.css') }}">
	<link rel="stylesheet" href="{{ asset('/fontEnd/css/jquery.timepicker.css') }}">
	
	<link rel="stylesheet" href="{{ asset('/fontEnd/css/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset('/fontEnd/css/style.css') }}">
</head>
<body>
	


	@include('frontEnd.includes.header')
	@include('frontEnd.includes.menubar')

	
	<!-- END nav -->
	
	@yield('mainContent')
	

	@include('frontEnd.includes.footer')
		
		

		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

		<script src="{{ asset('/fontEnd/js/jquery.min.js') }}"></script>
		<script src="{{ asset('/fontEnd/js/jquery-migrate-3.0.1.min.js') }}"></script>
		<script src="{{ asset('/fontEnd/js/popper.min.js') }}"></script>
		<script src="{{ asset('/fontEnd/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('/fontEnd/js/jquery.easing.1.3.js') }}"></script>
		<script src="{{ asset('/fontEnd/js/jquery.waypoints.min.js') }}"></script>
		<script src="{{ asset('/fontEnd/js/jquery.stellar.min.js') }}"></script>
		<script src="{{ asset('/fontEnd/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('/fontEnd/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('/fontEnd/js/jquery.animateNumber.min.js') }}"></script>
		<script src="{{ asset('/fontEnd/js/bootstrap-datepicker.js') }}"></script>
		<script src="{{ asset('/fontEnd/js/jquery.timepicker.min.js') }}"></script>
		<script src="{{ asset('/fontEnd/js/scrollax.min.js') }}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="{{ asset('/fontEnd/js/google-map.js') }}"></script>
		
		<script src="{{ asset('/fontEnd/js/main.js') }}"></script>
		
</body>
</html>

