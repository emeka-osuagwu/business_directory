<!DOCTYPE html>

<html lang="en-US">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="{{ url('assets/fonts/font-awesome.css') }}" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ url('/assets/bootstrap/css/bootstrap.css') }}"type="text/css">
	<link rel="stylesheet" href="{{ url('/assets/css/bootstrap-select.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ url('/assets/css/owl.carousel.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ url('/assets/css/jquery.mCustomScrollbar.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ url('/assets/css/jquery.nouislider.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ url('/assets/css/colors/green.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ url('/assets/css/user.style.css') }}" type="text/css">

	<title>Lekki Republic</title>

</head>

<body onunload="" class="map-fullscreen page-homepage navigation-off-canvas" id="page-top">

		@yield('content')

		<script type="text/javascript" src="{{ url('assets/js/jquery-2.1.0.min.js')}}"></script>
		<script type="text/javascript" src="{{ url('assets/js/before.load.js')}}"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;libraries=places"></script>
		<script type="text/javascript" src="{{ url('assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
		<script type="text/javascript" src="{{ url('assets/js/markerclusterer.js')}}"></script>
		<script type="text/javascript" src="{{ url('assets/bootstrap/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{ url('assets/js/richmarker-compiled.js')}}"></script>
		<script type="text/javascript" src="{{ url('assets/js/smoothscroll.js')}}"></script>
		<script type="text/javascript" src="{{ url('assets/js/infobox.js')}}"></script>
		<script type="text/javascript" src="{{ url('assets/js/bootstrap-select.min.js')}}"></script>
		<script type="text/javascript" src="{{ url('assets/js/icheck.min.js')}}"></script>
		<script type="text/javascript" src="{{ url('assets/js/jquery.hotkeys.js')}}"></script>
		<script type="text/javascript" src="{{ url('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
		<script type="text/javascript" src="{{ url('assets/js/jquery.nouislider.all.min.js')}}"></script>
		<script type="text/javascript" src="{{ url('assets/js/custom.js')}}"></script>
		<script type="text/javascript" src="{{ url('assets/js/maps.js')}}"></script>

		<script>
			var _latitude = 6.4439;
			var _longitude = 3.4751;
			var jsonPath = "{{ url('/jsonBusiness') }}"

			// Load JSON data and create Google Maps

			$.getJSON(jsonPath)
					.done(function(json) {
						createHomepageGoogleMap(_latitude,_longitude,json);

					})
					.fail(function( jqxhr, textStatus, error ) {
						console.log(error);
					})
			;

			// Set if language is RTL and load Owl Carousel

			$(window).load(function(){
				var rtl = false; // Use RTL
				initializeOwl(rtl);
			});

			autoComplete();

		</script>

		<!--[if lte IE 9]>
		<script type="text/javascript" src="assets/js/ie-scripts.js"></script>
		<![endif]-->
</body>
</html>
