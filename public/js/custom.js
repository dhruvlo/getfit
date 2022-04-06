/* JS Document */

/******************************

[Table of Contents]

1. Vars and Inits
2. Set Header
3. Init Menu
4. Init Video
5. Init Gallery


******************************/

$(document).ready(function()
{

	/* 

	1. Vars and Inits

	*/

	var header = $('.header');
	var hamburgerBar = $('.hamburger_bar');
	var hamburger = $('.hamburger');

	setHeader();

	$(window).on('resize', function()
	{
		setHeader();

		setTimeout(function()
		{
			$(window).trigger('resize.px.parallax');
		}, 375);
	});

	$(document).on('scroll', function()
	{
		setHeader();
	});

	initVideo();
	initGallery();
	initMenu();

	/* 

	2. Set Header

	*/

	function setHeader()
	{
		if($(window).scrollTop() > 91)
		{
			header.addClass('scrolled');
			hamburgerBar.addClass('scrolled');
		}
		else
		{
			header.removeClass('scrolled');
			hamburgerBar.removeClass('scrolled');
		}
	}

	/* 

	3. Init Menu

	*/

	function initMenu()
	{
		if($('.menu').length)
		{
			var menu = $('.menu');
			hamburger.on('click', function()
			{
				hamburger.toggleClass('active');
				menu.toggleClass('active');
			});
		}
	}

	/* 

	4. Init Video

	*/

	function initVideo()
	{
		$(".vimeo").colorbox(
		{
			iframe:true,
			innerWidth:640,
			innerHeight:409,
			maxWidth: '90%'
		});
	}

	/* 

	5. Init Gallery

	*/

	function initGallery()
	{
		if($('.gallery_slider').length)
		{
			var gallery = $('.gallery_slider');
			gallery.owlCarousel(
			{
				autoplay:true,
				loop:true,
				smartSpeed:1200,
				nav:false,
				dots:false,
				center:true,
				responsive:
				{
					0:
					{
						items:3
					},
					991:
					{
						items:5
					}
				}
			});
		}
	}

	$("#loginForm").submit(function(e){
		e.preventDefault();
		var actionurl = e.currentTarget.action;
		$.ajax({
			url: actionurl,
			type: 'post',
			data: $("#loginForm").serialize(),
			success: function(data){
				if(data.success){
					var user_type = data.user_type;
					if(user_type == "admin"){
						window.location.href =  $(location).attr('href')+"admin";
					} else if(user_type == "trainer"){
						window.location.href =  $(location).attr('href')+"trainer";
					} else if(user_type == "user"){
						window.location.href =  $(location).attr('href')+"dashboard";
					}
				}else{
					$("#login_error").html("<div class='alert alert-danger' role='alert'>Credentials are not correct</div>");					
				}
			}
		});
	});

	$("#registerForm").submit(function(e){
		e.preventDefault();
		$.ajax({
			url: 'registration',
			type: 'post',
			data: $("#registerForm").serialize(),
			success: function(data){
				if (data.success) {
					$("#register_error").html("<div class='alert alert-success' role='alert'>Registration Successful</div>").delay(2000).fadeOut('slow');					
					setTimeout(function() { $('#registerModal').modal('hide'); }, 5000);
				}else{
					$("#register_error").html("<div class='alert alert-danger' role='alert'>Something went wrong</div>");					
				}
			}
		});
	});

});