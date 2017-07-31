<!DOCTYPE html>
<html lang="en">
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>@yield('title', 'Shawarma')</title>

		<!-- Bootstrap -->
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

		<!-- Google Web Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
    <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
		
		<!-- Template CSS Files  -->
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="js/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
		<link href="js/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
		<link href="js/plugins/owl-carousel/owl.theme.css" rel="stylesheet">
		<link href="js/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="js/plugins/datepicker/datepicker.css" rel="stylesheet">
		<link href="{{asset('css/style.css')}}" rel="stylesheet">
		<link href="{{asset('css/responsive.css')}}" rel="stylesheet">
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/fav-144.html">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/fav-114.html">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/fav-72.html">
		<link rel="apple-touch-icon-precomposed" href="images/fav-57.html">
		<link rel="shortcut icon" href="images/fav.html">
		
	</head>
	<body>
	<header class="main-header">
		<!-- Nested Container Starts -->
			<div class="container text-center-xs">
			<!-- Nested Row Starts -->
				<div class="row">
					<div class="col-sm-4 col-xs-12">
					<!-- Logo Starts -->
						<img src="{{asset('images/logo.png')}}" alt="Delizia foods" data-class="logo img-responsive img-center-xs">
					<!-- Logo Ends -->
					</div>
					<div class="col-sm-8 col-xs-12">
					<!-- Top Links Starts -->
						<ul class="list-unstyled list-inline top-links text-right-lg text-right-md text-right-sm text-bold">
							<li><a href="#">Help</a></li>
							<li><a href="#">Request Call Back</a></li>
							@if(Auth::check())
							<li><a href="{{route('cart.index')}}"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span><span class="alert-badge">{{Cart::count()}}</span> Welcome {{ Auth::user()->name }} !</a></li>
							<li><a href="{{route('user.logout')}}">LogOut</a></li>
							@else
							<li><a href="{{route('user.signup')}}">Register</a></li>
							<li><a href="{{route('user.signin')}}">Login</a></li>@endif
							 
							
						</ul>
					<!-- Top Links Ends -->
					<!-- Starts -->
						<ul class="list-unstyled list-inline text-right-lg text-right-md text-right-sm order-info">
							<li class="lead"><i class="fa fa-phone"></i> Call : 08038882808/08036553080</li>
							<li class="hidden-xs">&nbsp;</li>
							<li><a href="{{route('cart.index')}}" class="btn btn-light animation">Order Food Online!</a></li>
						</ul>
					<!-- Ends -->
					</div>
				</div>
			<!-- Nested Row Ends -->
			</div>
		<!-- Nested Container Ends -->
		</header>
		<!-- Main Menu Starts -->
		<nav id="nav" class="main-menu navbar flat">
		<!-- Nested Container Starts -->
			<div class="container">
			<!-- Nav Header Starts -->
				<div class="navbar-header">
					<button type="button" class="btn btn-navbar navbar-toggle flat animation" data-toggle="collapse" data-target=".navbar-cat-collapse">
						<span class="sr-only">Toggle Navigation</span>
						<i class="fa fa-bars"></i>
					</button>
				</div>
			<!-- Nav Header Ends -->
			<!-- Navbar Cat collapse Starts -->
				<div class="collapse navbar-collapse navbar-cat-collapse">
					<ul class="nav navbar-nav text-uppercase text-bold pull-right">
						<li class="active"><a href="{{route('home')}}">Home</a></li>
						<li><a href="{{route('aboutus')}}">About Us</a></li>
						<!--<li><a href="">Food List</a></li>-->
						<li><a href="{{route('contact')}}">Contact Us</a></li>
						</ul>
				</div>
			<!-- Navbar Cat collapse Ends -->
			</div>
		<!-- Nested Container Ends -->
		</nav>

		@yield('content')


		<footer class="main-footer">
		<!-- Nested Container Starts -->
			<div class="container">
			<!-- Starts -->
				<div class="row">
				<!-- Logo Starts -->
					<div class="col-md-3 col-xs-12">
						<img src="{{asset('images/logo.png')}}" alt="delizia" class="img-responsive img-center-sm img-center-xs">
					</div>
				<!-- Logo Ends -->
				<!-- Page Links Starts -->
					<div class="col-md-6 col-xs-12">
						<ul class="list-unstyled list-inline page-links text-center">
							<li><a href="{{route('home')}}">Home</a></li>
							<li><a href="{{route('aboutus')}}">About Us</a></li>
							<li><a href="#">Terms</a></li>
                       		 <li><a href="#">Policy</a></li>
							<li><a href="{{route('contact')}}">Contact Us</a></li>
						</ul>
					</div>
				<!-- Page Links Ends -->
				<!-- Social Media Links Starts -->
					<div class="col-md-3 col-xs-12">
						<ul class="list-unstyled list-inline sm-links text-right-lg text-right-md text-center-sm text-center-xs">
							<li>
								<a href="https://web.facebook.com/deliziafds/" class="btn btn-secondary animation">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							 <li>
								<a href="https://web.instagram.com/deliziafds" class="btn btn-secondary animation">
									<i class="fa fa-instagram"></i>
								</a>
							</li>
							<!--
							<li>
								<a href="#" class="btn btn-secondary animation">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
							<li>
								<a href="#" class="btn btn-secondary animation">
									<i class="fa fa-skype"></i>
								</a>
							</li>
							<li>
								<a href="#" class="btn btn-secondary animation">
									<i class="fa fa-pinterest"></i>
								</a>
							</li>-->
						</ul>
					</div>
				<!-- Social Media Links Ends -->
				</div>
			<!-- Ends -->
			<!-- Address Section Starts -->
				<section class="foot-address text-center-xs">
					<h5></h5>
				<!-- Nested Row Starts -->
					<div class="row">
						<ul class="list-unstyled col-sm-4 col-xs-12">
							<li>Address: No 9 Belvista Estate, Ikate Elegushi</li>
							<li>Lagos.</li>
						</ul>
						<ul class="list-unstyled col-sm-4 col-xs-12">
									<li>Telephone: 08038882808, 08036553080</li>
						</ul>
						<ul class="list-unstyled col-sm-4 col-xs-12">
							
							<li>E-mail: <a href="mailto:info@deliziafds.com">info@deliziafds.com</a></li>
						</ul>
					</div>
				<!-- Nested Row Ends -->
				</section>
			<!-- Address Section Ends -->
			<!-- Links Section Starts -->
			<!-- Links Section Ends -->
			<!-- Copyright Starts -->
				<p class="copyright text-center">
					All Rights Reserved &copy; Delizia Foods.
				</p>
				<p class="copyright pull-right">
					Designed by <a href="http://intercoresolutions.com.ng">Intercore Solution</a>
				</p>
			<!-- Copyright Ends -->
			</div>
		<!-- Nested Container Ends -->
		</footer>
	<!-- Footer Area Ends -->
	<!-- Template JS Files -->
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>

	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>
	<script src="js/plugins/datepicker/bootstrap-datepicker.js"></script>
	<script src="js/plugins/owl-carousel/owl.carousel.js"></script>
	<script src="js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3&amp;sensor=false"></script>	
	<script src="js/custom.js"></script>
	<script src="{{asset('dist/js/vendor/jquery.js')}}"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script src="{{asset('dist/js/app.js')}}"></script>
	</body>
	</html>