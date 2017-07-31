<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function index()
    {
        $foods = Product::all();
    	return view('front.home', compact('foods'));
    }

    public function foods()
    {
        $foods = Product::all();
    	return view('front.foods', compact('foods'));
    }

    public function food()
    {
    	return view('front.food');
    }

    public function aboutus()
    {
        return view('front.about');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function storecontact(Request $request)
    {
       $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required'
            ]);
            

      Mail::send('mail.send',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($message)
    {
        $message->from('info@deliziafds.com');
        $message->to('info@deliziafds.com', 'Admin')->subject('Delizia Feedback');
    });

  return Redirect()->route('contact')->with('message', 'Thanks for contacting us!');
        
    }
}