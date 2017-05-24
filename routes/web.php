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

Route::get('/', 'GuestController@index');
Route::get('promotion', 'GuestController@promotion');
Route::get('menu', 'GuestController@menu');
Route::get('reservation', 'GuestController@reservation');
Route::get('blog','GuestController@blog');
Route::get('gallery','GuestController@gallery');


Auth::routes();

Route::get('/admin/home', 'HomeController@index')->name('home');
Route::resource('admin/product', 'Auth\ProductController');
Route::resource('admin/promotion', 'Auth\PromotionController');
Route::resource('admin/blog', 'Auth\BlogController');
Route::resource('admin/contact', 'Auth\ContactController');
Route::resource('admin/category', 'Auth\CategoryController');


