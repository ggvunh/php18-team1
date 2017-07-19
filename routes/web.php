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
use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    return view('backend.createbook');
});
 // create topic
Route::get('/createtopic', 'TopicController@createTopic');
Route::post('/createtopic','TopicController@postCreateTopic');
// end create topic
// create publish company
Route::get('/createpublishcompany', 'PublishController@createPublishCompany');
Route::post('/createpublishcompany','PublishController@postCreatePublishCompany');
// end create publish company
// create Author
Route::get('/createauthor','AuthorController@createAuthor');
Route::post('/createauthor','AuthorController@postCreateAuthor');
// end create Author
// create book
Route::get('/createbook', 'BookController@createBook');
Route::post('/createbook','BookController@postCreateBook');
// end create book
Route::get('register','UserController@getregister');
Route::post('register','UserController@postregister');

Route::get('login', 'UserController@getlogin');
Route::post('login', 'UserController@postlogin');


Route::get('logout', 'UserController@getlogout');

Route::get('index', function(){
	return view('books.index');
});