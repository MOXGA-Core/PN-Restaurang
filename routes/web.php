<?php

Route::get('/', 'HomeController@index')->name('home');
Route::post('contact', 'ContactController@store')->name('contact.store');

Auth::routes();

Route::group([
    'prefix' => 'backend',
    'as' => 'backend.',
    'namespace' => 'Backend',
    'middleware' => 'auth'
], function() {
    Route::resource('/', 'HomeController');
    Route::resource('products', 'ProductController');
    Route::resource('promotion', 'PromotionController');
    Route::resource('contact', 'ContactController');
});
