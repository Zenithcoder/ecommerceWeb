@extends('layout.master')

@section('content')
    <section class="scrollable wrapper">
              <div class="row">
                <div class="col-xs-6">
                  <h4>Delizia Shawarma</h4>
                  <p>
                    <a href="http://www.deliziafds.com/">www.deliziafds.com</a>
                  </p>
                  <p>No 9 Belvista Estate, 
                  <br />Ikate Elegushi
                  <br />Lagos State, Nigeria.</p>
                  <p>Telephone: 08038882808, 08036553080
                  <br />
                </div>
                <div class="col-xs-6 text-right">
                  <p class="h4">#9048392</p>
                  <h5><?php echo date("Y/m/d"); ?></h5>
                </div>
              </div>
              <div class="well m-t">
                <div class="row">
                  <div class="col-xs-6">
                    <strong>TO:</strong>
                    <h4>{{$orders->user->name}}</h4>
                    <br />{{$orders->user->address}},
                    <br />{{$orders->user->city}}, {{$orders->user->state}}.
                    <br />Phone: {{$orders->user->phone}}
                    <br />Email: {{$orders->user->email}}
                    <br /></p>
                  </div>
                  
                </div>
              </div>
              <p class="m-t m-b">Order date: 
              <strong><?php echo date("Y/m/d"); ?></strong>
              <br />Order ID: 
              <strong>#DEL/{{$orders->id}}</strong></p>
              <div class="line"></div>
              <table class="table">
                <thead>
                  <tr>
                    <th width="60">QTY</th>
                    <th>DESCRIPTION</th>
                    <th width="140">PRICE</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($orders->orderItems as $item)
                  <tr>
                    <td>{{$item->pivot->qty}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->pivot->total}}</td>
                  </tr>
                   @endforeach
                  <tr>
                    <td colspan="3" class="text-right no-border">
                      <strong>Total</strong>
                    </td>
                    <td>
                      <strong><span style="text-decoration: line-through;">N</span>{{$orders->total}}</strong>
                    </td>
                  </tr>
                </tbody>
              </table>
            </section>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen, open" data-target="#nav,html"></a>
        </section>

@endsection