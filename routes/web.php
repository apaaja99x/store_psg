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

Route::get('/home', 'ProductController@index');
Route::get('/add', 'ProductController@addindex');
Route::post('/store', 'ProductController@store');
Route::get('/data-product', 'ProductController@dataproduct');
Route::get('/', 'ProductController@getMazoaIndex');
Route::resource('cart', 'CartController');
Route::resource('/product', 'ProductController');
Route::get('/delete/{id}', 'ProductController@destroy');
//Route::post('checkout', 'CartController@checkout');
Route::get('/detail/{id}', 'ProductController@show');
Route::get('/checkout', 'PaymentController@create');
Route::post('/store', 'PaymentController@store');
Route::get('/payment', 'PaymentController@index');
Route::get('/detail-pay/{kode_trans}', 'PaymentController@show');

Route::get('/sell', 'PaymentController@getAdminIndex');
Route::get('query', 'ProductController@search');
Route::get('catSearch', 'ProductController@cSearch');
Route::get('/success/pdf/{kode_trans}',[
	'uses' => 'PaymentController@getPdf',
	'as' => 'print.pdf',
]);

Route::get('/success/{kode_trans}', 'PaymentController@success');

Auth::routes();

Route::get('/product', 'HomeController@index')->name('home');