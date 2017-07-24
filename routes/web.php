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


Route::get('register','UserController@getregister');
Route::post('register','UserController@postregister');

Route::get('login', 'UserController@getlogin');
Route::post('login', 'UserController@postlogin');


Route::get('logout', 'UserController@logout');

Route::get('index', function(){
	return view('books.index');
});