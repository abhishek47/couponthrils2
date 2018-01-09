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

Route::get('/', 'WelcomeController@index')->name('landing');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/profile', 'HomeController@update')->name('profile.update');
Route::post('/profile/password', 'HomeController@updatePassword')->name('profile.password');

Route::get('/deals', 'CouponsController@index')->name('coupons');
Route::post('/coupons/redeem', 'CouponsController@redeem')->name('coupons')->middleware('auth');

Route::get('/stores', 'StoresController@index')->name('stores');

Route::get('/stores/{storeID}', 'StoresController@show')->name('stores');


Route::get('/categories/{categoryID}', 'CategoriesController@show')->name('categories');
