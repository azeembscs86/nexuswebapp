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



Route::get('/','ProductsController@index')->name('product');  

Route::get('/add-to-cart/{id}','ProductsController@addToCart')->name('product.addToCart');  

Route::get('/shoping-cart','ProductsController@getShopingCart')->name('product.shopingCart');  


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
