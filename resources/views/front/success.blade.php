@extends('layout.master')

@section('content')
    <br>
<div class="row">
    <div class="small-6 small-centered columns">
        <h3>Order placed Successfully </h3>

        
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="hover-content">
                            
                            <div class="overlay animation">
                                <p></p><a href="{{route('home')}}" class="btn btn-success" role="button">Back To Home</a></p>
                            </div>
                        </div>
                    </div>


</div>


@endsection