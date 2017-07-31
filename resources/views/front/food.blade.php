@extends('layout.master')

@section('foods')
Food Gallery
@endsection

@section('content')
<div class="col-md-9 col-sm-8 col-xs-12">
				<!-- Hotels Grid List Starts -->
					<div class="hotels-list-grid">
					<!-- Nested Row Starts -->
						<div class="row">
						<!-- List Box #1 Starts -->
							<div class="col-md-4 col-sm-6 col-xs-12">
							<!-- Grid Box Starts -->
								<div class="grid-box">
								<!-- Images Starts -->
									<div class="image">
										<img src="images/hotels/thumb/hotel-grid-thumb-img1.jpg" alt="Eagle Boys Village Plaza" class="img-responsive img-center">
										<span class="delivery-time text-center">45<br>min</span>
									</div>
								<!-- Images Ends -->
								<!-- Content Starts -->
									<div class="content text-center-md text-center-sm text-center-xs">
									<!-- Title Starts -->
										<h6 class="grid-box-title"><a href="#">Eagle Boys Village Plaza</a></h6>
									<!-- Title Ends -->
									<!-- Tags Starts -->
										<ul class="list-unstyled list-inline grid-box-tags">
											<li><a href="#">Pizza</a>,</li>
											<li><a href="#">American</a>,</li>
											<li><a href="#">Pasta</a>,</li>
											<li><a href="#">Wraps</a></li>
										</ul>
									<!-- Tags Ends -->	
									<!-- Offer Details Starts -->
										<ul class="list-unstyled grid-box-info clearfix">
											<li class="pull-left-lg"><span class="sub-title"><i class="fa fa-certificate"></i> Flat 10% Off</span></li>
											<li class="pull-right-lg text-right-lg">
												<a href="#" class="btn btn-secondary animation">
													View Menu <i class="fa fa-chevron-right"></i>
												</a>
											</li>
										</ul>
									<!-- Offer Details Ends -->
									<!-- Links Starts -->
										<div class="clearfix">
										<!-- Info Links Starts -->
											<ul class="list-unstyled list-inline grid-box-info-links pull-left-lg">
												<li><a href="#" data-toggle="tooltip" data-placement="top" title="Coupons"><i class="fa fa-tag"></i></a></li>
												<li><a href="#" data-toggle="tooltip" data-placement="top" title="Information"><i class="fa fa-info-circle"></i></a></li>
												<li><a href="#" data-toggle="tooltip" data-placement="top" title="Reviews"><i class="fa fa-star-half-full"></i></a></li>
												<li><a href="#" data-toggle="tooltip" data-placement="top" title="Specials"><i class="fa fa-asterisk"></i></a></li>
											</ul>
										<!-- Info Links Ends -->
										<!-- Ratings Starts -->
											<ul class="list-unstyled list-inline grid-box-ratings pull-right-lg text-right-lg">
												<li class="star-rating"><i class="fa fa-star"></i> 45</li>
												<li><a href="#" class="badge animation"><i class="fa fa-heart"></i> 10</a></li>
											</ul>
										<!-- Ratings Ends -->
										</div>
									<!-- Links Ends -->
									</div>
								<!-- Content Ends -->
								</div>
							<!-- Grid Box Ends -->
							</div>
						<!-- List Box #1 Ends -->
						<!-- List Box #2 Starts -->
				</div>
				</div>
				</div>
@endsection