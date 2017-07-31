<?php
use App\Mail\OrderMail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', 'FrontController@index')->name('home');

Route::get('/foods', 'FrontController@foods')->name('foods');

Route::get('/food', 'FrontController@food')->name('food');
Route::get('/about', 'FrontController@aboutus')->name('aboutus');
Route::get('/contact', 'FrontController@contact')->name('contact');
Route::post('/store-contact', 'FrontController@storecontact')->name('store.contact');

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index');

Route::resource('/cart', 'CartController');
Route::get('/cart/add-item/{id}', 'CartController@addItem')->name('cart.addItem');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::post('toggledeliver/{orderId}', 'OrderController@toggledeliver')->name('toggle.deliver');

    Route::get('/', 'AdminController@index')->name('admin.index');

Route::get('/2', function () {
        return view('mail.ordermail');
    })->name('admin2.index');


    Route::resource('product','ProductsController');
    Route::resource('category','CategoriesController');

    Route::get('orders/{type?}', 'OrderController@Orders');

});
Route::resource('address','AddressController');

//Route::get('checkout','CheckoutController@step1');
Route::group(['middleware' => 'auth'], function () {
    Route::get('shipping-info','CheckoutController@shipping')->name('checkout.shipping');
});


Route::get('payment','CheckoutController@payment')->name('checkout.payment');
Route::post('store-payment','CheckoutController@storePayment')->name('payment.store');

Route::get('/basicemail','MailController@basic_email')->name('order.mail');

Route::get('order-now','CheckoutController@orderNow')->name('order.now');



Route::get('test',function(){
   $orders=App\Order::find(2);
   $items=$orders->orderItems;
dd($items);
});


Route::group(['prefix'=>'user'], function(){

Route::group(['middleware'=> 'guest'], function(){

    Route::get('/signup', [
    'uses'=>'UserController@getSignup',
    'as' => 'user.signup'
    ]);
    
Route::post('/signup', [
    'uses'=>'UserController@postSignup',
    'as' => 'user.signup'
    ]);

Route::get('/signin', [
    'uses'=>'UserController@getSignin',
    'as' => 'user.signin'
    ]);

Route::post('/signin', [
    'uses'=>'UserController@postSignin',
    'as' => 'user.signin'
    ]);
});

Route::group(['middleware'=> 'auth'], function(){

Route::get('/profile', [
    'uses'=>'UserController@getProfile',
    'as' => 'user.profile'
    ]);

Route::get('/Logout', [
    'uses'=>'UserController@getLogout',
    'as' => 'user.logout'
    ]);
});
});

Route::get('/sendmail', function () {
    // send an email to "batman@batcave.io"
    Mail::to('francollimassociates@gmail.com')->send(new OrderMail);

    return "true";
});