@extends('layout.master')

@section('title')
Contact Us
@endsection

@section('content')
<section class="main-banner three flip parallax">
		<!-- Nested Container Starts -->
			<div class="container">
				<h1 class="text-center">Contact Us</h1>
			</div>
		<!-- Nested Container Ends -->
		</section>
	<!-- Main Banner Section Ends -->
	<!-- Main Container Starts -->
		<div class="container main-container">
			<section class="contact-form-section">
				<h3 class="text-bold text-center">.</h3>

@if(Session::has('message'))
    <div class="alert alert-info">
      {{Session::get('message')}}
    </div>
@endif


<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

{!! Form::open(['route' => 'store.contact', 'method' => 'post']) !!}

<div class="form-group">
    {!! Form::label('Your Name') !!}
    {!! Form::text('name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your E-mail Address') !!}
    {!! Form::text('email', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your e-mail address')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your Message') !!}
    {!! Form::textarea('message', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your message')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Contact Us!', 
      array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
			</section>
		</div>
	<!-- Main Container Ends -->
	<!-- Contact Details Section Starts -->
		<section class="contact-details">
		<!-- Nested Container Starts -->
			<div class="container text-center-xs">
			<!-- Nested Row Starts -->
				<div class="row">
				<!-- Right Column Starts -->
					<div class="col-md-4 col-xs-12">
					</div>
				<!-- Right Column Ends -->
				</div>
			<!-- Nested Row Ends -->
			</div>
		<!-- Nested Container Ends -->
		</section>
	<!-- Contact Details Section Ends -->
	<!-- Map Starts -->
		<div class="contact-page-map text-center">
			<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d1982.3450392760458!2d3.4839323579075514!3d6.433840948836291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d6.433802999999999!2d3.4846076999999998!4m5!1s0x103b7ad941c6044f%3A0xb9abaacac781dc6d!2sFotolighthouse%2C+Unit+14%2C+Bella+Vista+Estate%2C+Dauda+Fasanya+Street.+Ikate-Elegushi%2C+Lekki+101245!3m2!1d6.433739!2d3.4848329999999996!5e0!3m2!1sen!2sng!4v1486985033377" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	<!-- Map Ends -->
	<!-- Footer Area Starts -->

@endsection