<!DOCTYPE html>
<html lang="en">
	<head>
		<title>About</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="{{asset('public/images/favicon.ico')}}">
		<link rel="shortcut icon" href="{{asset('public/images/favicon.ico')}}" />
		<link rel="stylesheet" href="{{ URL::asset('public/booking/css/booking.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('public/css/camera.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('public/css/owl.carousel.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('public/css/style.css') }}">
		<script src="{{ URL::asset('public/js/jquery.js') }}"></script>
		<script src="{{ URL::asset('public/js/jquery-migrate-1.2.1.js') }}"></script>
		<script src="{{ URL::asset('public/js/script.js') }}"></script>
		<script src="{{ URL::asset('public/js/superfish.js') }}"></script>
		<script src="{{ URL::asset('public/js/jquery.ui.totop.js') }}"></script>
		<script src="{{ URL::asset('public/js/jquery.equalheights.js') }}"></script>
		<script src="{{ URL::asset('public/js/jquery.mobilemenu.js') }}"></script>
		<script src="{{ URL::asset('public/js/jquery.easing.1.3.js') }}"></script>
		<script src="{{ URL::asset('public/js/owl.carousel.js') }}"></script>
		<script src="{{ URL::asset('public/js/camera.js') }}"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="{{ URL::asset('public/js/jquery.mobile.customized.min.js') }}"></script>
		<!--<![endif]-->
		<script src="{{ URL::asset('public/booking/js/booking.js') }}"></script>
		<script>
			$(document).ready(function(){
			jQuery('#camera_wrap').camera({
				loader: false,
				pagination: false ,
				minHeight: '444',
				thumbnails: false,
				height: '48.375%',
				caption: true,
				navigation: true,
				fx: 'mosaic'
			});
			/*carousel*/
			var owl=$("#owl");
				owl.owlCarousel({
				items : 2, //10 items above 1000px browser width
				itemsDesktop : [995,2], //5 items between 1000px and 901px
				itemsDesktopSmall : [767, 2], // betweem 900px and 601px
				itemsTablet: [700, 2], //2 items between 600 and 0
				itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
				navigation : true,
				pagination : false
				});
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="page1" id="top">
<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li class="current"><a href="index.html">HOME</a></li>
								<li><a href="index-1.html">HOTELS</a></li>
								<li><a href="index-2.html">SPECIAL OFFERS</a></li>
								<li><a href="index-3.html">CONTACT US</a></li>
								<li><a href="{{ url('/login') }}">LOGIN</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
				<div class="grid_12">
					<h1>
						<a href="index.html">
							<img src="{{asset('public/images/logo.png')}}" alt="Your Happy Family">
						</a>
					</h1>
				</div>
			</div>
		</header>