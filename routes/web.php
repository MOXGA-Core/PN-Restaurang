<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('/menu/{product}', 'HomeController@show')->name('product.show');
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
    Route::resource('materials', 'MaterialController');
    Route::resource('promotion', 'PromotionController');
    Route::resource('contact', 'ContactController');
    Route::resource('photos', 'PhotoController');
    Route::resource('messages', 'MessageController');
});
