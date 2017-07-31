<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function Orders($type='')
    {
        if($type =='pending'){
            $orders=Order::where('delivered','0')->paginate(10);
        }elseif ($type == 'delivered'){
            $orders=Order::where('delivered','1')->paginate(10);
        }else{
            $orders=Order::paginate(10);
        }

        return view('admin.orders',compact('orders'));
    }

    public function toggledeliver(Request $request,$orderId)
    {
        $order=Order::find($orderId);
        if($request->has('delivered')){
            $order->delivered=$request->delivered;
        }else{
            $order->delivered="0";
        }
        $order->save();

        return back();
    }
}
