<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

class UserController extends Controller
{
    public function getSignup(){
    	return view('user.signup');
    }

    public function postSignup(Request $request){

    	$this->validate($request, [
    		'email' => 'email|required|unique:users',
    		'password' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'phone' => 'required'
    		]);

    	$user = new User([
    		'name' => $request->input('name'),
    		'email' => $request->input('email'),
    		'password' => bcrypt($request->input('password')),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'phone' => $request->input('phone')
    		]);

    	$user->save();

        Auth::login($user);

    	return redirect()->route('home');
    }

		public function getSignin(){

		return view('user.signin');
			}

		public function postSignin(Request $request){
				$this->validate($request, [
    		'email' => 'email|required',
    		'password' => 'required|min:4'
    		]);
				if(Auth::attempt([
    		'email' => $request->input('email'),
    		'password' => $request->input('password')])){
					return redirect()->route('home');
    		}

    		return redirect()->back();

		}

		public function getProfile(){
			return view('user.profile');
		}

		public function getLogout(Request $request){
			Auth::logout();
            
			return redirect('/');
		}
}
