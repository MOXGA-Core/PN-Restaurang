<?php
use App\Models\TempPrice;

Route::get('/test',function (){
    $arr_tojson = array(
        'dt' => 1,
        'dt2' => 2,
    );
    $arr_tojson = json_encode($arr_tojson);
    TempPrice::create(['value' => $arr_tojson]);
});


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
Route::get('contact','GuestController@contact');
Route::get('product/{id}','GuestController@product');




Auth::routes();

Route::get('/admin/home', 'HomeController@index')->name('home');
Route::get('/admin/add', 'HomeController@AddLocal')->name('home');
Route::resource('admin/product', 'Auth\ProductController');
Route::resource('admin/promotion', 'Auth\PromotionController');
Route::resource('admin/blog', 'Auth\BlogController');
Route::resource('admin/contact', 'Auth\ContactController');
Route::resource('admin/category', 'Auth\CategoryController');
Route::resource('admin/type', 'Auth\TypeController');
