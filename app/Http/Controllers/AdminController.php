<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;


class AdminController extends Controller
{
     
    public function index()
    {
        $tuser = User::all();
        $td=Order::where('delivered','0')->get();
        
        return view('admin.index', compact('tuser','td'));
    }
}
