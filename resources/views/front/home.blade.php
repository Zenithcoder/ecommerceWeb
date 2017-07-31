@extends('layout.master')

@section('title')
HomePage
@endsection

@section('content')

<section class="search-area parallax">
		<!-- Nested Container Starts -->
			<div class="container text-center">
				
			</div>
		<!-- Nested Container Ends -->
		</section>
	<!-- Search Section Ends -->
	<!-- Intro Section Starts -->
		
	<!-- Intro Section Ends -->
	<!-- Welcome Section Starts -->
		<section class="welcome section">
		<!-- Nested Container Starts -->
			<div class="container">
			<!-- Welcome Content Starts -->
				
				<div class="row">
				
					<div class="col-lg-5 col-sm-6 col-xs-12">
					<!-- Welcome Box Starts -->
						<div class="welcome-box text-center">
							<h1 class="text-light">Welcome <br>Delizia Foods</h1>
							<p class="spl text-bold">Delizia Shawarma is an Online Shawarma Outfit</p>
							<p>
								that focuses on delivering Quality and affordable products at the fastest speed possible, our products are specially prepared with outstanding taste in a very conducive and clean environment with customers health in mind.
							</p>
							<a href="{{route('aboutus')}}" class="btn btn-secondary text-bold text-uppercase animation">More Info</a>
						</div>
					<!-- Welcome Box Ends -->
					</div>
					<div class="col-lg-7 col-sm-6 col-xs-12">
						<img src="images/welcome-img1.jpg" alt="Welcome" class="img-responsive img-center">
					</div>
				</div>
			<!-- Welcome Content Ends -->
			<!-- Food Menu Grid Starts -->
			
				<div class="food-menu-grid row text-center">
				<!-- Food Menu #1 Starts -->
				
					@forelse($foods->chunk(3) as $foodChunk)
				<div class="food-menu-grid row text-center">
				<!-- Food Menu #1 Starts -->
				@foreach($foodChunk as $food)
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="hover-content">
							<img src="{{url('images', $food->image)}}" alt="chinese" class="img-responsive animation">
							<div class="overlay animation">
								<h4 class="text-uppercase"><a href="{{route('food')}}">{{$food->name}}</a></h4>
								<div> <span style="text-decoration: line-through;">N</span>{{$food->price}}  {{$food->description}}</div>
								<p></p><a href="{{route('cart.addItem', $food->id)}}" class="btn btn-success" role="button">Add to Cart</a></p>
							</div>
						</div>
					</div>
					@endforeach
				</div>
				@empty
				<h4>No Food</h4>

				@endforelse
			
				<!-- Food Menu #1 Ends -->
				<!-- Food Menu #2 Starts -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="hover-content">
							<img src="images/menu/thumb/indian-menu.jpg" alt="Indian" class="img-responsive animation">
							<div class="overlay animation">
								<h4 class="text-uppercase">Indian</h4>
							</div>
						</div>
					</div>
				<!-- Food Menu #2 Ends -->
				<!-- Food Menu #3 Starts -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="hover-content">
							<img src="images/menu/thumb/italian-menu.jpg" alt="italian" class="img-responsive animation">
							<div class="overlay animation">
								<h4 class="text-uppercase">Italian</h4>
							</div>
						</div>
					</div>
				<!-- Food Menu #3 Ends -->
				<!-- Food Menu #4 Starts -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="hover-content">
							<img src="images/menu/thumb/continental-menu.jpg" alt="continental" class="img-responsive animation">
							<div class="overlay animation">
								<h4 class="text-uppercase">Continental</h4>
							</div>
						</div>
					</div>
				<!-- Food Menu #4 Ends -->
				<!-- Food Menu #5 Starts -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="hover-content">
							<img src="images/menu/thumb/thai-menu.jpg" alt="thai" class="img-responsive animation">
							<div class="overlay animation">
								<h4 class="text-uppercase">Thai</h4>
							</div>
						</div>
					</div>
				<!-- Food Menu #5 Ends -->
				<!-- Food Menu #6 Starts -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="hover-content">
							<img src="images/menu/thumb/sushi-menu.jpg" alt="sushi" class="img-responsive animation">
							<div class="overlay animation">
								<h4 class="text-uppercase">Sushi</h4>
							</div>
						</div>
					</div>
				<!-- Food Menu #6 Ends -->
				<!-- Food Menu #7 Starts -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="hover-content">
							<img src="images/menu/thumb/pizza-menu.jpg" alt="Pizza &amp; Burgers" class="img-responsive animation">
							<div class="overlay animation">
								<h4 class="text-uppercase">Pizza &amp; Burgers</h4>
							</div>
						</div>
					</div>
				<!-- Food Menu #7 Ends -->
				<!-- Food Menu #8 Starts -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="hover-content">
							<img src="images/menu/thumb/veggies-menu.jpg" alt="Pure Veggies" class="img-responsive animation">
							<div class="overlay animation">
								<h4 class="text-uppercase">Pure Veggies</h4>
							</div>
						</div>
					</div>
				<!-- Food Menu #8 Ends -->
				<!-- Food Menu #9 Starts -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="hover-content">
							<img src="images/menu/thumb/tiffins-menu.jpg" alt="tiffins &amp; breakfast" class="img-responsive animation">
							<div class="overlay animation">
								<h4 class="text-uppercase">Tiffins &amp; Breakfast</h4>
							</div>
						</div>
					</div>
				<!-- Food Menu #9 Ends -->
				</div>
			<!-- Food Menu Grid Ends -->
			</div>
		<!-- Nested Container Ends -->
		</section>
	<!-- Welcome Section Ends -->
	<!-- Menu Card Section Starts 
		<section class="menu-card section">
		<!-- Menu Card Carousel Starts 
			<div id="menu-card-carousel" class="owl-carousel">
			<!-- Menu Card #1 Starts --
				<div class="item slide1 text-center-xs">
					<div class="container">
					<!-- Heading Starts 
						<h1 class="text-capitalize">Indian Food</h1>
						<h1 class="text-lowercase">Menu: 
							<small>from</small>
							<span>$12<sup>.50</sup></span>
						</h1>
					<!-- Heading Starts -->
					<!-- Menu Card List Starts 
						<div class="row">
							<div class="col-lg-2 col-sm-3 col-xs-12 col-lg-offset-4">
								<ul class="list-unstyled text-bold">
									<li><i class="fa fa-minus"></i> Veggie Wrap</li>
									<li><i class="fa fa-minus"></i> Paneer Wrap</li>
									<li><i class="fa fa-minus"></i> Tandoori Chicken</li>
									<li><i class="fa fa-minus"></i> Chicken Sandwich</li>
									<li><i class="fa fa-minus"></i> Malai Kofta </li>
								</ul>
							</div>
							<div class="col-lg-2 col-sm-3 col-xs-12">
								<ul class="list-unstyled text-bold">
									<li><i class="fa fa-minus"></i> Karahi Panner</li>
									<li><i class="fa fa-minus"></i> Fish Pakora</li>
									<li><i class="fa fa-minus"></i> Chilli Chicken</li>
									<li><i class="fa fa-minus"></i> Matar Paneer</li>
									<li><i class="fa fa-minus"></i> Seehk Kabab</li>
								</ul>
							</div>
							<div class="col-lg-2 col-sm-3 col-xs-12">
								<ul class="list-unstyled text-bold">
									<li><i class="fa fa-minus"></i> Tandoori Murgh</li>
									<li><i class="fa fa-minus"></i> Reshmi Kabab</li>
									<li><i class="fa fa-minus"></i> Machli Tikka</li>
									<li><i class="fa fa-minus"></i> Machli Tikka</li>
									<li><i class="fa fa-minus"></i> Chicken Biryani</li>
								</ul>
							</div>
							<div class="col-lg-2 col-sm-3 col-xs-12">
								<ul class="list-unstyled text-bold">
									<li><i class="fa fa-minus"></i> Mutton Biryani</li>
									<li><i class="fa fa-minus"></i> Fish Biryani</li>
									<li><i class="fa fa-minus"></i> Alu Paratha</li>
									<li><i class="fa fa-minus"></i> Lachha Paratha</li>
									<li><i class="fa fa-minus"></i> Pyazi Kulcha</li>
								</ul>
							</div>
						</div>
					<!-- Menu Card List Ends 
					</div>
				</div>
			<!-- Menu Card #1 Ends -->
			<!-- Menu Card #2 Starts -
				<div class="item slide2 text-center-xs">
					<div class="container">
					<!-- Heading Starts
						<h1 class="text-capitalize">Chinees Food</h1>
						<h1 class="text-lowercase">Menu: 
							<small>from</small>
							<span>$18<sup>.50</sup></span>
						</h1>
					<!-- Heading Starts -->
					<!-- Menu Card List Starts 
						<div class="row">
							<div class="col-lg-2 col-sm-3 col-xs-12 col-lg-offset-4">
								<ul class="list-unstyled text-bold">
									<li><i class="fa fa-minus"></i> Veggie Wrap</li>
									<li><i class="fa fa-minus"></i> Paneer Wrap</li>
									<li><i class="fa fa-minus"></i> Tandoori Chicken</li>
									<li><i class="fa fa-minus"></i> Chicken Sandwich</li>
									<li><i class="fa fa-minus"></i> Malai Kofta </li>
								</ul>
							</div>
							<div class="col-lg-2 col-sm-3 col-xs-12">
								<ul class="list-unstyled text-bold">
									<li><i class="fa fa-minus"></i> Karahi Panner</li>
									<li><i class="fa fa-minus"></i> Fish Pakora</li>
									<li><i class="fa fa-minus"></i> Chilli Chicken</li>
									<li><i class="fa fa-minus"></i> Matar Paneer</li>
									<li><i class="fa fa-minus"></i> Seehk Kabab</li>
								</ul>
							</div>
							<div class="col-lg-2 col-sm-3 col-xs-12">
								<ul class="list-unstyled text-bold">
									<li><i class="fa fa-minus"></i> Tandoori Murgh</li>
									<li><i class="fa fa-minus"></i> Reshmi Kabab</li>
									<li><i class="fa fa-minus"></i> Machli Tikka</li>
									<li><i class="fa fa-minus"></i> Machli Tikka</li>
									<li><i class="fa fa-minus"></i> Chicken Biryani</li>
								</ul>
							</div>
							<div class="col-lg-2 col-sm-3 col-xs-12">
								<ul class="list-unstyled text-bold">
									<li><i class="fa fa-minus"></i> Mutton Biryani</li>
									<li><i class="fa fa-minus"></i> Fish Biryani</li>
									<li><i class="fa fa-minus"></i> Alu Paratha</li>
									<li><i class="fa fa-minus"></i> Lachha Paratha</li>
									<li><i class="fa fa-minus"></i> Pyazi Kulcha</li>
								</ul>
							</div>
						</div>
					<!-- Menu Card List Ends 
					</div>
				</div>
			<!-- Menu Card #2 Ends -
			</div>
		<!-- Menu Card Carousel Ends --
		</section>
	<!-- Menu Card Section Ends -->
	<!-- Special Offers Section Starts -->
		<section class="special-offers section parallax">
		<!-- Nested Container Starts -->
			<div class="container">
				<h1 class="text-light no-margin-top text-center-sm text-center-xs">Special Offers</h1>
			<!-- Special Offers Carousel Starts -->
				<div id="special-offers-carousel" class="owl-carousel">
				<!-- Offer Col #1 Starts -->
					<div class="offer-col text-center">
						<img src="images/special-offers/special-offers-img1.jpg" alt="Food Basera" class="img-responsive img-center">
						<a href="#" class="btn btn-circle text-uppercase text-bold animation">More</a>
						<div class="content">
							<h4>Food Basera</h4>
							<h6 class="text-light">Take upto 15% Off on entire food order</h6>
							<p class="coupon-code text-uppercase text-bold">Code : 15foodoff</p>
						</div>
					</div>
				<!-- Offer Col #1 Ends -->
				<!-- Offer Col #2 Starts -->
					<div class="offer-col text-center">
						<img src="images/special-offers/special-offers-img2.jpg" alt="Food Basera" class="img-responsive img-center">
						<a href="#" class="btn btn-circle text-uppercase text-bold animation">More</a>
						<div class="content">
							<h4>Food Paradise</h4>
							<h6 class="text-light">Take $20 Off when you order from our Mobile App.</h6>
							<p class="coupon-code text-uppercase text-bold">Code : 20moboff</p>
						</div>
					</div>
				<!-- Offer Col #2 Ends -->
				<!-- Offer Col #3 Starts -->
					<div class="offer-col text-center">
						<img src="images/special-offers/special-offers-img3.jpg" alt="Food Basera" class="img-responsive img-center">
						<a href="#" class="btn btn-circle text-uppercase text-bold animation">More</a>
						<div class="content">
							<h4>Taj Mahal Food</h4>
							<h6 class="text-light">Enjoy up to 20% discount on  order from foodbingo.</h6>
							<p class="coupon-code text-uppercase text-bold">Code : 20foodoff</p>
						</div>
					</div>
				<!-- Offer Col #3 Ends -->
				<!-- Offer Col #4 Starts -->
					<div class="offer-col text-center">
						<img src="images/special-offers/special-offers-img4.jpg" alt="Food Basera" class="img-responsive img-center">
						<a href="#" class="btn btn-circle text-uppercase text-bold animation">More</a>
						<div class="content">
							<h4>Green Bawarchi</h4>
							<h6 class="text-light">Take upto 15% Off on entire food order</h6>
							<p class="coupon-code text-uppercase text-bold">Code : 15foodoff</p>
						</div>
					</div>
				<!-- Offer Col #4 Ends -->
				<!-- Offer Col #5 Starts -->
					<div class="offer-col text-center">
						<img src="images/special-offers/special-offers-img1.jpg" alt="Food Basera" class="img-responsive img-center">
						<a href="#" class="btn btn-circle text-uppercase text-bold animation">More</a>
						<div class="content">
							<h4>Food Basera</h4>
							<h6 class="text-light">Take upto 15% Off on entire food order</h6>
							<p class="coupon-code text-uppercase text-bold">Code : 15foodoff</p>
						</div>
					</div>
				<!-- Offer Col #5 Ends -->
				<!-- Offer Col #6 Starts -->
					<div class="offer-col text-center">
						<img src="images/special-offers/special-offers-img2.jpg" alt="Food Basera" class="img-responsive img-center">
						<a href="#" class="btn btn-circle text-uppercase text-bold animation">More</a>
						<div class="content">
							<h4>Food Paradise</h4>
							<h6 class="text-light">Take $20 Off when you order from our Mobile App.</h6>
							<p class="coupon-code text-uppercase text-bold">Code : 20moboff</p>
						</div>
					</div>
				<!-- Offer Col #6 Ends -->
				<!-- Offer Col #7 Starts -->
					<div class="offer-col text-center">
						<img src="images/special-offers/special-offers-img3.jpg" alt="Food Basera" class="img-responsive img-center">
						<a href="#" class="btn btn-circle text-uppercase text-bold animation">More</a>
						<div class="content">
							<h4>Taj Mahal Food</h4>
							<h6 class="text-light">Enjoy up to 20% discount on  order from foodbingo.</h6>
							<p class="coupon-code text-uppercase text-bold">Code : 20foodoff</p>
						</div>
					</div>
				<!-- Offer Col #7 Ends -->
				<!-- Offer Col #8 Starts -->
					<div class="offer-col text-center">
						<img src="images/special-offers/special-offers-img4.jpg" alt="Food Basera" class="img-responsive img-center">
						<a href="#" class="btn btn-circle text-uppercase text-bold animation">More</a>
						<div class="content">
							<h4>Green Bawarchi</h4>
							<h6 class="text-light">Take upto 15% Off on entire food order</h6>
							<p class="coupon-code text-uppercase text-bold">Code : 15foodoff</p>
						</div>
					</div>
				<!-- Offer Col #8 Ends -->
				</div>
			<!-- Special Offers Carousel Ends -->
			</div>
		<!-- Nested Container Ends -->
		</section>
	<!-- Special Offers Section Ends -->
	<!-- News & Events Section Starts -->
@endsection