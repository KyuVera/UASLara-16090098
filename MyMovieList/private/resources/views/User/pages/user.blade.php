<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>MyMovieList</title>
		<link href='public/bahan/img/MML-Icon.png' rel='shortcut icon'>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" type="text/css" href="{{ asset('public/userbahan/css/linearicons.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('public/userbahan/css/font-awesome.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('public/userbahan/css/bootstrap.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('public/userbahan/css/magnific-popup.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('public/userbahan/css/nice-select.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('public/userbahan/css/animate.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('public/userbahan/css/owl.carousel.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('public/userbahan/css/jquery-ui.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('public/userbahan/css/main.css') }}">
	</head>
	<body>
		<header>
			
			<div class="logo-wrap">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
							<a href="{{route('homeuser.index')}}">
								<img class="img-fluid" src="public/userbahan/img/MML.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
							<img class="img-fluid" src="public/userbahan/img/bannerads.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="container main-menu" id="main-menu">
				<div class="row align-items-center justify-content-between">
					<nav id="nav-menu-container">
						<ul class="nav-menu">
							<li class="menu-active"><a href="{{route('homeuser.index')}}">Home</a></li>
							<li><a href="{{route('Artikel')}}">Article</a></li>
							<li><a href="{{route('MovieListt')}}">Movie List</a></li>
							<li><a href="{{route('About')}}">About</a></li>
						</ul>
					</nav><!-- #nav-menu-container -->
					<div class="navbar-right">
						<form class="Search">
							<input type="text" class="form-control Search-box" name="Search-box" id="Search-box" placeholder="Search">
							<label for="Search-box" class="Search-box-label">
								<span class="lnr lnr-magnifier"></span>
							</label>
							<span class="Search-close">
								<span class="lnr lnr-cross"></span>
							</span>
						</form>
					</div>
				</div>
			</div>
		</header>

		@yield('content')

				<!-- start footer Area -->
		<footer class="footer-area section-gap">
			<div class="container">
				<div class="footer-bottom row align-items-center">
					<p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					<div class="col-lg-4 col-md-12 footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
			</div>
		</footer>
		
		<!-- End footer Area -->
		<script type="text/javascript" src="{{ asset('public/userbahan/js/vendor/jquery-2.2.4.min.js') }}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script type="text/javascript" src="{{ asset('public/userbahan/js/vendor/bootstrap.min.js') }}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script type="text/javascript" src="{{ asset('public/userbahan/js/easing.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('public/userbahan/js/hoverIntent.js') }}"></script>
		<script type="text/javascript" src="{{ asset('public/userbahan/js/superfish.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('public/userbahan/js/jquery.ajaxchimp.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('public/userbahan/js/jquery.magnific-popup.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('public/userbahan/js/mn-accordion.js') }}"></script>
		<script type="text/javascript" src="{{ asset('public/userbahan/js/jquery-ui.js') }}"></script>
		<script type="text/javascript" src="{{ asset('public/userbahan/js/jquery.nice-select.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('public/userbahan/js/owl.carousel.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('public/userbahan/js/mail-script.js') }}"></script>
		<script type="text/javascript" src="{{ asset('public/userbahan/js/main.js') }}"></script>
	</body>
</html>