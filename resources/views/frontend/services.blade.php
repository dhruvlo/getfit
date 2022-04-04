<!DOCTYPE html>
<html lang="en">
<head>
<title>GetFIT | Classes & Services</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="GetFIT template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/services.css">
<link rel="stylesheet" type="text/css" href="styles/services_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
						<a href="{{ route('home')}}">
							<div class="logo d-flex flex-row align-items-center justify-content-start"><div>Get<span>fit</span></div></div>
						</a>
						<nav class="main_nav">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="{{ route('home')}}">Home</a></li>
								<li class="active"><a href="{{ route('services')}}">Classes & Services</a></li>
								<li><a href="{{ route('about')}}">About us</a></li>
								<li><a href="{{ route('contact')}}">Contact us</a></li>
							</ul>
						</nav>
						@if(!Auth::check())
						<a class="pointer phone d-flex flex-row align-items-center justify-content-start ml-auto" data-toggle="modal" data-target="#loginModal">
						  <i class="fa fa-sign-in" aria-hidden="true"></i>
							<div>Login</div>
						</a>
						<a class="pointer phone d-flex flex-row align-items-center justify-content-start ml-4" data-toggle="modal" data-target="#registerModal">
						  <i class="fa fa-user" aria-hidden="true"></i>
							<div>Register</div>
						</a>
						@endif
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Hamburger -->
	
	<div class="hamburger_bar trans_400 d-flex flex-row align-items-center justify-content-start">
		<div class="hamburger">
			<div class="menu_toggle d-flex flex-row align-items-center justify-content-start">
				<span>menu</span>
				<div class="hamburger_container">
					<div class="menu_hamburger">
						<div class="line_1 hamburger_lines" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
						<div class="line_2 hamburger_lines" style="visibility: inherit; opacity: 1;"></div>
						<div class="line_3 hamburger_lines" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Menu -->

	<div class="menu trans_800">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<ul>
				<li><a href="{{ route('home')}}">Home</a></li>
				<li class="active"><a href="{{ route('services')}}">Classes & Services</a></li>
				<li><a href="{{ route('about')}}">About us</a></li>
				<li><a href="{{ route('contact')}}">Contact us</a></li>
			</ul>
		</div>
		<div class="menu_phone d-flex flex-row align-items-center justify-content-start">
			<i class="fa fa-phone" aria-hidden="true"></i>
				<span>652-345 3222 11</span>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(images/services.jpg)"></div>
		<div class="overlay"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Services</div>
							<div class="home_subtitle">Pilates, Yoga, Fitness, Spinning & many more</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<div class="section_subtitle">welcome to Getfit</div>
						<div class="section_title">Our Courses</div>
					</div>
				</div>
			</div>
			<div class="row services_row">
				
				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service">
						<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
							<div><div class="service_icon"><img src="images/icon_4.png" alt=""></div></div>
							<div class="service_title">Weight Loss Class</div>
						</div>
						<div class="service_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum.</p>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service">
						<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
							<div><div class="service_icon"><img src="images/icon_5.png" alt=""></div></div>
							<div class="service_title">Yoga Classes</div>
						</div>
						<div class="service_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum.</p>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service">
						<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
							<div><div class="service_icon"><img src="images/icon_6.png" alt=""></div></div>
							<div class="service_title">Spinning Class</div>
						</div>
						<div class="service_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum.</p>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service">
						<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
							<div><div class="service_icon"><img src="images/icon_7.png" alt=""></div></div>
							<div class="service_title">Private Fit Class</div>
						</div>
						<div class="service_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum.</p>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service">
						<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
							<div><div class="service_icon"><img src="images/icon_8.png" alt=""></div></div>
							<div class="service_title">Nutrition Classes</div>
						</div>
						<div class="service_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum.</p>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service">
						<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
							<div><div class="service_icon"><img src="images/icon_9.png" alt=""></div></div>
							<div class="service_title">Pillates Class</div>
						</div>
						<div class="service_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Timetable -->

	<div class="timetable">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/timetable.jpg" data-speed="0.8"></div>
		<div class="tt_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<div class="section_subtitle">welcome to Getfit</div>
						<div class="section_title">Plan Table</div>
					</div>
					<div class="timetable_filtering">
						<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
							<li class="active item_filter_btn" data-filter="*">All Plans</li>
							<li class="item_filter_btn" data-filter=".weight_loss">Weight Loss</li>
							<li class="item_filter_btn" data-filter=".aerobics">Aerobics</li>
							<li class="item_filter_btn" data-filter=".crossfit">Crossfit</li>
							<li class="item_filter_btn" data-filter=".fitness">Fitness</li>
							<li class="item_filter_btn" data-filter=".yoga">Yoga</li>
							<li class="item_filter_btn" data-filter=".pilates">Pilates</li>
							<li class="item_filter_btn" data-filter=".stretching">Stretching</li>
						</ul>
					</div>
					<div class="timetable_container d-flex flex-sm-row flex-column align-items-start justify-content-sm-between justify-content-start">

						<!-- Monday -->
						<div class="tt_day">
							<div class="tt_title">Weight Loss</div>
							<div class="tt_day_content grid">

								<!-- Class -->
								<div class="tt_class grid-item weight_loss">
									<div class="tt_class_title">Weight Loss</div>
									<div class="tt_class_instructor">valish Smith</div>
									<div class="tt_class_time">9:00</div>
								</div>
							</div>
						</div>

						<!-- Tuesday -->
						<div class="tt_day">
							<div class="tt_title">Aerobics</div>
							<div class="tt_day_content grid">

								<!-- Class -->
								<div class="tt_class grid-item aerobics">
									<div class="tt_class_title">Weight Loss</div>
									<div class="tt_class_instructor">Jessica Smith</div>
									<div class="tt_class_time">8:00</div>
								</div>
							</div>
						</div>

						<!-- Wednesday -->
						<div class="tt_day">
							<div class="tt_title">Crossfit</div>
							<div class="tt_day_content grid">

								<!-- Class -->
								<div class="tt_class grid-item crossfit">
									<div class="tt_class_title">Crossfit</div>
									<div class="tt_class_instructor">Jessica Smith</div>
									<div class="tt_class_time">Rs </div>
								</div>
							</div>
						</div>

						<!-- Thursday -->
						<div class="tt_day">
							<div class="tt_title">Fitness</div>
							<div class="tt_day_content grid aerobics">
								
								<!-- Class -->
								<div class="tt_class grid-item fitness">
									<div class="tt_class_title">Fitness</div>
									<div class="tt_class_instructor">Jessica Smith</div>
									<div class="tt_class_time">9:00</div>
								</div>
							</div>
						</div>

						<!-- Friday -->
						<div class="tt_day">
							<div class="tt_title">Yoga</div>
							<div class="tt_day_content grid">
								
								<!-- Class -->
								<div class="tt_class grid-item yoga">
									<div class="tt_class_title">Yoga</div>
									<div class="tt_class_instructor">Jessica Smith</div>
									<div class="tt_class_time">9:00</div>
								</div>
							</div>
						</div>

						<!-- Saturday -->
						<div class="tt_day">
							<div class="tt_title">Pilates</div>
							<div class="tt_day_content grid">
								
								<!-- Class -->
								<div class="tt_class grid-item pilates">
									<div class="tt_class_title">Weight Loss</div>
									<div class="tt_class_instructor">Jessica Smith</div>
									<div class="tt_class_time">9:00</div>
								</div>

							</div>
						</div>

						<!-- Sunday -->
						<div class="tt_day">
							<div class="tt_title">Stretching</div>
							<div class="tt_day_content grid">
								
								<!-- Class -->
								<div class="tt_class grid-item stretching">
									<div class="tt_class_title">Stretching</div>
									<div class="tt_class_instructor">Jessica Smith</div>
									<div class="tt_class_time">9:00</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Extra -->

	<div class="extra d-flex flex-column align-items-center justify-content-center text-center">
		<div class="background_image" style="background-image:url(images/extra_wide.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="extra_content d-flex flex-column align-items-center justify-content-center text-center">
						<div class="extra_title">15% Discount</div>
						<div class="extra_text">
							<p>Morbi sed varius risus, vitae molestie lectus. Donec id hendrerit velit, eu fringilla neque. Etiam id finibus sapien. Donec sollicitudin luctus ex non pharetra.llus.</p>
						</div>
						<div class="button extra_button"><a href="#">Join Now</a></div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="footer_container">
						<div class="footer_content">
							<div class="footer_logo">
								<a href="#">
									<div class="logo d-flex flex-row align-items-center justify-content-center"><div>Get<span>fit</span></div></div>
								</a>
							</div>
							<nav class="footer_nav">
								<ul class="d-flex flex-sm-row flex-column align-items-sm-start align-items-center justify-content-center">
								<li class="active"><a href="{{ route('home')}}">Home</a></li>
								<li><a href="{{ route('services')}}">Classes & Services</a></li>
								<li><a href="{{ route('about')}}">About us</a></li>
								<li><a href="{{ route('contact')}}">Contact us</a></li>
								</ul>
							</nav>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

@include('frontend.partials.modal')


<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="js/services.js"></script>
</body>
</html>