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
Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout')->name('get-logout');

Route::group([
	'middleware' => 'auth',
	'namespace' => 'Admin'
	], function(){
		Route::get('/orders', 'OrderController@index')->name('home');
	});


Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');
Route::get('/contact/all', 'ContactController@allData')->name('contact-data');
Route::get(
	'/contact/all/{id}',
	'ContactController@showOneMessage'
	)->name('contact-data-one');
	
Route::get(
	'/contact/all/{id}/update',
	'ContactController@updateMessage'
	)->name('contact-update');


Route::post(
	'/contact/all/{id}/update',
	'ContactController@updateMessageSubmit'
	)->name('contact-update-submit');

Route::get(
	'/contact/all/{id}/delete',
	'ContactController@deleteMessage'
	)->name('contact-delete');



Route::get('/basket/', 'BasketController@basket')->name('basket');
	
Route::get('/order', 'BasketController@basketPlace')->name('order');

Route::post('/basket/add/{id}', 'BasketController@basketAdd')->name('basketAdd');
Route::post('/basket/remove/{id}', 'BasketController@basketRemove')->name('basketRemove');

Route::post('/order', 'BasketController@basketСonfirm')->name('basket-confirm');

Route::get('/categories', 'MainController@categories')->name('categories');

Route::get('/{category}', 'MainController@category')->name('category');

Route::get('/{category}/{product?}', 'MainController@product')->name('product');







