<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/index',function(){
    return view ('admin.dashboard');
});

Route::resource('category','CategoryController');
Route::resource('product','ProductController');

Route::group(['prefix'=>'auth','middleware'=>['auth','isAdmin']],function(){
	Route::get('/dashboard', function () {
    return view('admin.dashboard');
});



	Route::resource('category','CategoryController');
	Route::resource('product','ProductController');

	// Route::get('slider/create','SliderController@create')->name('slider.create');
	// Route::get('slider','SliderController@index')->name('slider.index');
	// Route::post('slider','SliderController@store')->name('slider.store');
	// Route::delete('slider/{id}','SliderController@destroy')->name('slider.destroy');

	Route::get('users','UserController@index')->name('user.index');

	//orders
	Route::get('/orders','CartController@userOrder')->name('order.index');
	Route::get('/orders/{userid}/{orderid}','CartController@viewUserOrder')->name('user.order');


	


});