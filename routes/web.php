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

//Farmers Route
Route::get('Farmers/', 'BuyersController@index');
Route::get('Farmers/create', 'FarmersController@create')->name('Farmers.create');
Route::post('Farmers/', 'FarmersController@store');
Route::get('/Farmers/{buyers}', 'FarmersController@show');
Route::get('/Farmers/{buyers}/edit', 'FarmersController@edit');
Route::post('Farmers/{request}', 'FarmersController@update');
Route::delete('Farmers/{Buyer}', 'FarmersController@destroy');

//Buyers Route
Route::get('Buyers/create', 'BuyersController@create')->name('Buyers.create');
Route::get('Buyers', 'BuyersController@index');
Route::post('Buyers/', 'BuyersController@store');
Route::get('/Buyers/{buyers}', 'BuyersController@show');
Route::get('/Buyers/{buyers}/edit', 'BuyersController@edit');
Route::post('Buyers/{request}', 'BuyersController@update');
Route::delete('Buyers/{Buyer}', 'BuyersController@destroy');
