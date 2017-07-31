@extends('layout.master')

@section('foods')
Food Gallery
@endsection

@section('content')

<section class="welcome section">
		<!-- Nested Container Starts -->
			<div class="container">
			@forelse($foods as $food)
			<!-- Food Menu Grid Starts -->
				<div class="food-menu-grid row text-center">
				<!-- Food Menu #1 Starts -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="hover-content">
							<img src="{{url('images', $food->image)}}" alt="chinese" class="img-responsive animation">
							<div class="overlay animation">
								<h4 class="text-uppercase">${{$food->price}} {{$food->name}}</h4>
								<h6>{{$food->description}}</h6>
							</div>
						</div>
					</div>
				@empty
				<h3>No food</h3>
				</div>
			@endforelse
			</div>
		<!-- Nested Container Ends -->
		</section>
	 
@endsection