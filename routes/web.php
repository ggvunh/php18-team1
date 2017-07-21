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


// list topics
Route::get('/listtopics', 'TopicController@listTopics');
//end list topics
// create topic
Route::get('/createtopic', 'TopicController@createTopic');
Route::post('/createtopic','TopicController@postCreateTopic');
// end create topic
//edit topic
Route::get('/topicedit/{id}', 'TopicController@editTopic');
Route::put('edit/topic/{id}', 'TopicController@putEditTopic');
//end edit topic
//list publish companies
Route::get('/listpublishcompanies', 'PublishCompanyController@listPublishCompanies');
//end list publish companies
// edit publish company
Route::get('/editpublishcompany/{id}','PublishCompanyController@editPublishCompany');
Route::put('edit/publishcompany/{id}','PublishCompanyController@putPublishCompany');
// end edit publish company
// create publish company
Route::get('/createpublishcompany', 'PublishCompanyController@createPublishCompany');
Route::post('/createpublishcompany','PublishCompanyController@postCreatePublishCompany');
// end create publish company
//list author
Route::get('/listauthors','AuthorController@listAuthor');
//end list author
//edit author
Route::get('/authoredit/{id}','AuthorController@editAuthor');
Route::put('edit/author/{id}','AuthorController@putEditAuthor');
//end edit author
// create Author
Route::get('/createauthor','AuthorController@createAuthor');
Route::post('/createauthor','AuthorController@postCreateAuthor');
// end create Author
// list book
Route::get('/listbooks','BookController@listBook');
// end list book
// Edit book
Route::get('/bookedit/{id}', 'BookController@editBook');
Route::put('/edit/book/{id}', 'BookController@putEditBook');
// end Edit book
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