<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Home Route
Route::get('/', function () {
    return view('home');
});

Auth::routes();

//Farmers Route
Route::get('Farmers/', 'BuyersController@index');
Route::get('Farmers/create', 'FarmersController@create')->name('Farmers.create');
Route::get('Farmers/login', 'UsersController@loginFarmer');
Route::post('Farmers/signIn', 'UsersController@signIn_Farmers');
Route::get('Farmers/create_buyer', 'UsersController@create_Farmer');
Route::post('Farmers/', 'FarmersController@store');
Route::get('/Farmers/{buyers}', 'FarmersController@show');
Route::get('/Farmers/{buyers}/edit', 'FarmersController@edit');
Route::post('Farmers/{request}', 'FarmersController@update');
Route::delete('Farmers/{Buyer}', 'FarmersController@destroy');
Route::get('/logout', 'UsersController@logout');

Route::get('/login', 'UsersController@loginFarmer');
//Buyers Route
Route::get('Buyers/create', 'BuyersController@create')->name('Buyers.create');
Route::get('Buyers/login', 'UsersController@loginBuyer')->name('login');
Route::post('Buyers/signIn', 'UsersController@signIn_buyers');
Route::post('Buyers/register', 'UsersController@register_Buyer');
Route::get('Buyers/create_buyer', 'UsersController@create_buyer');
Route::get('Buyers', 'BuyersController@index');
Route::post('Buyers/', 'BuyersController@store');
Route::get('/Buyers/{buyers}', 'BuyersController@show');
Route::get('/Buyers/{buyers}/edit', 'BuyersController@edit');
Route::post('Buyers/{request}', 'BuyersController@update');
Route::delete('Buyers/{Buyer}', 'BuyersController@destroy');
//Bids Route
Route::post('/Bids/{buyers}/create', 'BidsController@createBid');

//Comments Route
Route::post('/Buyers/{buyers}/comments', 'CommentsController@create_comment');

//Stats Route
Route::get('Stats/', 'StatsController@index');


Route::get('/test', function(){
      $notifications=auth()->user()->unreadNotifications;
      foreach ($notifications as $notification) {
        dd($notification->data['user']['name']);
      }
});
