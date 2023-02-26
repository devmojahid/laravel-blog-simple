<!DOCTYPE html>
<html lang="en">

<head>

	<title>NewsPrk</title>
	<!-- META -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--::::: FABICON ICON :::::::-->
	<link rel="icon" href="{{asset('frontend')}}/assets/img/icon/fabicon.png">
	<!--::::: ALL CSS FILES :::::::-->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/plugins/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/plugins/animate.min.css">
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/plugins/fontawesome.css">
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/plugins/modal-video.min.css">
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/plugins/owl.carousel.css">
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/plugins/slick.css">
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/plugins/stellarnav.css">
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/theme.css">
</head>

<body class="theme-1">
	<!--::::: PRELOADER START :::::::-->
	<!-- <div class="preloader">
		<div>
			<div class="nb-spinner"></div>
		</div>
	</div> -->
	<!--::::: PRELOADER END :::::::-->

	
	<!--::::: SEARCH FORM START:::::::-->
	<div class="searching">
		<div class="container">
			<div class="row">
				<div class="col-8 text-center m-auto">
					<div class="v1search_form">
						<form action="#">
							<input type="search" placeholder="Search Here...">
							<button type="submit" class="cbtn1">Search</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="close_btn">	<i class="fal fa-times"></i>
		</div>
	</div>
	<!--:::::SEARCH FORM END :::::::-->

	<!--::::: TOP BAR START :::::::-->
	<div class="topbar white_bg" id="top">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-8 align-self-center">
					<div class="trancarousel_area">
						<p class="trand">Tranding</p>
						<div class="trancarousel owl-carousel nav_style1">
							<div class="trancarousel_item">
								<p><a href="#">Top 10 Best Movies of 2018 So Far: Great Movies</a>
								</p>
							</div>
							<div class="trancarousel_item">
								<p><a href="#">Top 10 Best Movies of 2018 So Far: Great Movies</a>
								</p>
							</div>
							<div class="trancarousel_item">
								<p><a href="#">Top 10 Best Movies of 2018 So Far: Great Movies</a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 align-self-center">
					<div class="top_date_social text-right">
						<div class="paper_date">
							<p>Thursday, March 26, 2020</p>
						</div>
						<div class="social1">
							<ul class="inline">
								<li><a href="#"><i class="fab fa-twitter"></i></a>
								</li>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a>
								</li>
								<li><a href="#"><i class="fab fa-youtube"></i></a>
								</li>
								<li><a href="#"><i class="fab fa-instagram"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--::::: TOP BAR END :::::::-->

	<div class="border_black"></div>

	<!--::::: LOGO AREA START  :::::::-->
	<div class="logo_area white_bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 align-self-center">
					<div class="logo">
						<a href="{{ route('home') }}">
							<img src="{{asset('frontend')}}/assets/img/logo/logo.png" alt="image">
						</a>
					</div>
				</div>
				<div class="col-lg-8 align-self-center">
					<div class="banner1">
						<a href="#">
							<img src="{{asset('frontend')}}/assets/img/bg/banner1.png" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--::::: LOGO AREA END :::::::-->


	<!--::::: MENU AREA START  :::::::-->
	<div class="main-menu" id="header">	<a href="#top" class="up_btn up_btn1"><i class="far fa-chevron-double-up"></i></a>
		<div class="main-nav clearfix is-ts-sticky">
			<div class="container">
				<div class="row justify-content-between">
	
					<div class="col-6 col-lg-8">
						<div class="newsprk_nav stellarnav">
							<ul id="newsprk_menu">
								<li><a href="{{ route('home') }}">Home</a></li>
								<li><a href="{{ route('post') }}">Blogs</a></li>
								<li><a href="{{ route('single-post','dd') }}">Single Blogs</a></li>
								
								
							</ul>
						</div>
						
					</div>
					<div class="col-6 col-lg-4 align-self-center">
						<div class="menu_right">
							<div class="users_area">
								<ul class="inline">
									<li class="search_btn"><i class="far fa-search"></i>
									</li>
									<li><i class="fal fa-user-circle"></i>
									</li>
								</ul>
							</div>
							<div class="lang d-none d-xl-block">
								<ul>
									<li><a href="#">English <i class="far fa-angle-down"></i></a>
										<ul>
											<li><a href="#">Spanish</a>
											</li>
											<li><a href="#">China</a>
											</li>
											<li><a href="#">Hindi</a>
											</li>
											<li><a href="#">Corian</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="temp d-none d-lg-block">
								<div class="temp_wap">
									<div class="temp_icon">
										<img src="{{asset('frontend')}}/assets/img/icon/temp.png" alt="">
									</div>
									<h3 class="temp_count">13</h3>
									<p>San Francisco</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>