<!DOCTYPE html>
<html lang="en">

	
<!-- Mirrored from jthemes.net/themes/html/harmony-event/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Sep 2023 08:23:24 GMT -->
<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>Webify -  @yield('title')</title>
		<link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}">

		<!-- fraimwork - css include -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">

		<!-- icon css include -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome-all.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/flaticon.css')}}">

		<!-- carousel css include -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick-theme.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.theme.default.min.css')}}">

		<!-- others css include -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.mCustomScrollbar.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/calendar.css')}}">

		<!-- custom css include -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">

    @stack('css')

	</head>
  
	<body @if(Route::currentRouteName() == 'index') @else class="default-header-p" @endif>
    
   
    
    


    @yield('content')


		<!-- fraimwork - jquery include -->
		<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
		<script src="{{asset('assets/js/popper.min.js')}}"></script>
		<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

		<!-- carousel jquery include -->
		<script src="{{asset('assets/js/slick.min.js')}}"></script>
		<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

		<!-- map jquery include -->
		<script src="{{asset('assets/js/gmap3.min.js')}}"></script>
		<script src="http://maps.google.com/maps/api/js?key=AIzaSyC61_QVqt9LAhwFdlQmsNwi5aUJy9B2SyA"></script>

		<!-- calendar jquery include -->
		<script src="{{asset('assets/js/atc.min.js')}}"></script>

		<!-- others jquery include -->
		<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
		<script src="{{asset('assets/js/jarallax.min.js')}}"></script>
		<script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>

		<!-- gallery img loaded - jqury include -->
		<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>

		<!-- multy count down - jqury include -->
		<script src="{{asset('assets/js/jquery.countdown.js')}}"></script>

		<!-- custom jquery include -->
		<script src="{{asset('assets/js/custom.js')}}"></script>

    @stack('script')



	</body>

<!-- Mirrored from jthemes.net/themes/html/harmony-event/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Sep 2023 08:25:50 GMT -->
</html>