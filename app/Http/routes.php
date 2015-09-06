<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'homeController@index');
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/postLogin', 'Auth\AuthController@postLogin');
Route::get('/dashboard', 'dashboardController@index');
Route::get('/logout', 'Auth\AuthController@getLogout');
Route::get('/bannerdetail', 'bannerController@index');
Route::any('/addbanneraction', 'bannerController@add');
Route::get('/addBanner', 'bannerController@add');
Route::get('/hotelList', 'hotelController@index');
Route::get('/addHotel', 'hotelController@add');
Route::any('/addhotelaction', 'hotelController@add');
Route::any('/bookingaction', 'bookingController@add');
Route::get('/booking', 'bookingController@index');

