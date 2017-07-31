@extends('layout.master')

@section('content')
    <div class="row">
        <h3>Cart Items</h3>


        <table class="table table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>qty</th>
                <th>size</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cartItems as $cartItem)
                <tr>
                    <td>{{$cartItem->name}}</td>
                    <td>{{$cartItem->price}}</td>
                    <td width="50px">
                        {!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}
                        <input name="qty" type="text" value="{{$cartItem->qty}}">


                    </td>
                    <td>
                        <div > {!! Form::select('size', ['small'=>'Small','medium'=>'Medium','large'=>'Large'] , $cartItem->options->has('size')?$cartItem->options->size:'' ) !!}
                           </div>

                    </td>

                    <td>
                        <input style="float: left"  type="submit" class="button success small" value="Ok">
                        {!! Form::close() !!}

                        <form action="{{route('cart.destroy',$cartItem->rowId)}}"  method="POST">
                           {{csrf_field()}}
                           {{method_field('DELETE')}}
                           <input class="button small alert" type="submit" value="Delete">
                         </form>
                    </td>
                </tr>
            @endforeach

            <tr>
                <td></td>
                <td>
                    Tax: ${{Cart::tax()}} <br>
                    Sub Total: $ {{Cart::subtotal()}} <br>
                    Grand Total: $ {{Cart::total()}}
                </td>
                <td>Items: {{Cart::count()}}

                </td>
                <td></td>
                <td></td>

            </tr>
            </tbody>
        </table>

        <a href="{{route('order.now')}}" class="button">Confirm Order</a>
    </div>

<h5 >Add other items to it</h5>

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
                                <div>{{$food->price}}  {{$food->description}}</div>
                                <p></p><a href="{{route('cart.addItem', $food->id)}}" class="btn btn-success" role="button">Add to Cart</a></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @empty
                <h4>No Food</h4>

                @endforelse
</div>

@endsection