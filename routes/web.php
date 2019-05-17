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

Route::get('/', 'EventsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('event', 'EventsController', ['except' => ['edit', 'update', 'destroy']]);    
Route::get('admin', 'AdminController');
//Route::resource('order', 'OrderyController', ['only' => ['create', 'store']]);
Route::get('/offer', 'OffersController@create');
Route::post('/offer', 'OffersController@store');
//Route::get('events/search','EventsController@getSearch');
//Route::post('events/search','EventsController@postSearch');



/*Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'SpecialController@index');
Route::get('/users/update','SpecialController@update');

Route::get('/usercontroller/path',[
   'middleware' => 'First',
   'uses' => 'UserController@showPath'
]);*/
