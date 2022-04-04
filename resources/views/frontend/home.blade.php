<!DOCTYPE html>
<html lang="en">
<head>
<title>GetFIT | Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="GetFIT template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/bootstrap-4.1.2/bootstrap.min.css')}}">
<link href="{{ URL::asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link href="{{ URL::asset('plugins/colorbox/colorbox.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/responsive.css')}}">
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
								<li class="active"><a href="{{ route('home')}}">Home</a></li>
								<li><a href="{{ route('services')}}">Classes & Services</a></li>
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
				<li class="active"><a href="{{ route('home')}}">Home</a></li>
				<li><a href="{{ route('services')}}">Classes & Services</a></li>
				<li><a href="{{ route('about')}}">About us</a></li>
				<li><a href="{{ route('contact')}}">Contact us</a></li>
			</ul>
		</div>
		<div>
			<a class="menu_phone d-block" data-toggle="modal" data-target="#loginModal">
		  <i class="fa fa-sign-in" aria-hidden="true"></i>
			<div>Login</div>
		</a>
		</div>
		<div>
			<a class="menu_phone d-block " data-toggle="modal" data-target="#registerModal">
		  <i class="fa fa-user" aria-hidden="true"></i>
			<div>Register</div>
		</a>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(images/index.jpg)"></div>
		<div class="overlay"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">Get fit with us</div>
							<div class="home_subtitle">Pilates, Yoga, Fitness, Spinning & many more</div>
							<div class="button home_button ml-auto mr-auto"><a href="#">Join Now</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Boxes -->

	<div class="boxes">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="boxes_container d-flex flex-lg-row flex-column align-items-center justify-content-center">
						
						<!-- Box -->
						<div class="box">
							<div class="box_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_1.png" alt=""></div>
							<div class="box_title">Pilates with trainer</div>
							<div class="box_text">
								<p>A system of exercises using special apparatus, designed to improve physical strength, flexibility, and posture, and enhance mental awareness.</p>
							</div>
							
						</div>

						

						<!-- Box -->
						<div class="box">
							<div class="box_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_3.png" alt=""></div>
							<div class="box_title">Healthy diet plan</div>
							<div class="box_text">
								<p>Planning your own meals will allow you to see how much you're actually eating.</p>
							</div>
							
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- About -->

	<div class="about">
		<div class="container about_container">
			<div class="row">
				<div class="col-lg-6">
					<div class="about_content">
						<div class="section_title_container">
							<div class="section_subtitle">welcome to Getfit</div>
							<div class="section_title">About <span>Getfit</span></div>
						</div>
						<div class="text_highlight">OUR MISSION</div>
						<div class="about_text">
							<p>Committed to providing effective personal training in Milton Keynes and helping you achieve sustainable results, The Armoury Coaching  is designed to be different. Unlike traditional gyms and too-good-to-be-true weight loss plans, we don’t believe in short-term fixes. Instead, we’ll help you to set realistic goals - and achieve them

Training & addressing your diet with the correct approach adds to your life exponentially, through increasing your energy, decreasing your stress, heightening your mood, boosting long-term health, and equipping you with confidence in your everyday strength and appearance. Which is exactly why we designed The Armoury from the ground up to be the best 1-2-1 & Small Group Personal Training Studio in Milton Keynes. If you’d like to be part of a coaching environment that puts you first? Get in touch</p>
						</div>
						<div class="button about_button"><a href="#">Join Now</a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="about_background">
			<div class="container fill_height">
				<div class="row fill_height">
					<div class="col-lg-6 offset-lg-6 fill_height">
						<div class="about_image"><img src="images/a1.png" alt=""></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<div class="testimonials">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/testimonials.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="section_title_container">
						<div class="section_subtitle">welcome to Getfit</div>
						<div class="section_title">Testimonials</div>
					</div>

					<!-- Testimonial -->
					<div class="test test_1 d-flex flex-row align-items-start justify-content-start">
						<div><div class="test_image"><img src="images/test_1.jpg" alt=""></div></div>
						<div class="test_content">
							<div class="test_name"><a href="#">Diane Smith</a></div>
							<div class="test_title">client</div>
							<div class="test_text">
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna.</p>
							</div>
							<div class="rating rating_4 test_rating"><i></i><i></i><i></i><i></i><i></i></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					
					<!-- Testimonial -->
					<div class="test d-flex flex-row align-items-start justify-content-start">
						<div><div class="test_image"><img src="images/test_2.jpg" alt=""></div></div>
						<div class="test_content">
							<div class="test_name"><a href="#">Diane Smith</a></div>
							<div class="test_title">client</div>
							<div class="test_text">
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna.</p>
							</div>
							<div class="rating rating_4 test_rating"><i></i><i></i><i></i><i></i><i></i></div>
						</div>
					</div>

					<!-- Testimonial -->
					<div class="test d-flex flex-row align-items-start justify-content-start">
						<div><div class="test_image"><img src="images/test_3.jpg" alt=""></div></div>
						<div class="test_content">
							<div class="test_name"><a href="#">Diane Smith</a></div>
							<div class="test_title">client</div>
							<div class="test_text">
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna.</p>
							</div>
							<div class="rating rating_4 test_rating"><i></i><i></i><i></i><i></i><i></i></div>
						</div>
					</div>

				</div>
			</div>
			<div class="row test_button_row">
				<div class="col text-center">
					<div class="button test_button"><a href="#">Join Now</a></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Gallery -->

	<div class="gallery">
		
		<!-- Gallery Slider -->
		<div class="gallery_slider_container">
			<div class="owl-carousel owl-theme gallery_slider">
				
				<!-- Slide -->
				<div class="owl-item"><img src="images/gallery_3.jpg" alt=""></div>

				<!-- Slide -->
				<div class="owl-item"><img src="images/gallery_4.jpg" alt=""></div>

				<!-- Slide -->
				<div class="owl-item"><img src="images/gallery_5.jpg" alt=""></div>

				<!-- Slide -->
				<div class="owl-item"><img src="images/gallery_1.jpg" alt=""></div>

				<!-- Slide -->
				<div class="owl-item"><img src="images/gallery_2.jpg" alt=""></div>

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

	<!-- Blog -->

	<div class="blog">
		<div class="blog_overlay"></div>
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/blog.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class=" d-flex flex-row align-items-start justify-content-start">
						<div class="section_title_container">
							<div class="section_subtitle">welcome to Getfit</div>
							<div class="section_title">The Blog</div>
						</div>
						<div class="all_posts_link ml-auto"><a href="#">View all blog posts</a></div>
					</div>
				</div>
			</div>
			<div class="row blog_row">
				
				<!-- Blog Post -->
				<div class="col-lg-4 blog_col">
					<div class="blog_post">
						<div class="blog_post_image"><img src="images/blog_1.jpg" alt=""></div>
						<div class="blog_post_title"><a href="#">Tips for the perfect body</a></div>
						<div class="blog_post_date"><a href="#">june 29, 2018</a></div>
						<div class="blog_post_text">
							<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Odio vestibulum est mattis effic iturut.</p>
						</div>
						<div class="blog_post_link"><a href="#">Read More</a></div>
					</div>
				</div>

				<!-- Blog Post -->
				<div class="col-lg-4 blog_col">
					<div class="blog_post">
						<div class="blog_post_image"><img src="images/blog_2.jpg" alt=""></div>
						<div class="blog_post_title"><a href="#">Tips for the perfect body</a></div>
						<div class="blog_post_date"><a href="#">june 29, 2018</a></div>
						<div class="blog_post_text">
							<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Odio vestibulum est mattis effic iturut.</p>
						</div>
						<div class="blog_post_link"><a href="#">Read More</a></div>
					</div>
				</div>

				<!-- Blog Post -->
				<div class="col-lg-4 blog_col">
					<div class="blog_post">
						<div class="blog_post_image"><img src="images/blog_3.jpg" alt=""></div>
						<div class="blog_post_title"><a href="#">Video: Pilates 4 Begginers</a></div>
						<div class="blog_post_date"><a href="#">june 29, 2018</a></div>
						<div class="blog_post_text">
							<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Odio vestibulum est mattis effic iturut.</p>
						</div>
						<div class="blog_post_link"><a href="#">Read More</a></div>
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

<script src="{{ URL::asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{ URL::asset('styles/bootstrap-4.1.2/popper.js')}}"></script>
<script src="{{ URL::asset('styles/bootstrap-4.1.2/bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{ URL::asset('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{ URL::asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{ URL::asset('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{ URL::asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{ URL::asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{ URL::asset('plugins/easing/easing.js')}}"></script>
<script src="{{ URL::asset('plugins/progressbar/progressbar.min.js')}}"></script>
<script src="{{ URL::asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{ URL::asset('plugins/colorbox/jquery.colorbox-min.js')}}"></script>
<script src="{{ URL::asset('js/custom.js')}}"></script>
</body>
</html>