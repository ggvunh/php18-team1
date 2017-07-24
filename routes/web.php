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


Route::get('/search', 'SearchController@searchAll');
//list users
Route::get('/listusers','UserController@listUsers');
// end list users
//delete user
Route::get('/userdelete/{id}', 'UserController@deleteUser');
// end delete user
Route::get('/', 'BookController@index');
Route::get('/books/search', 'BookController@searchbook');
// list topics
Route::get('/listtopics', 'TopicController@listTopics');
Route::get('/sdlisttopics','TopicController@sdListTopics');
Route::get('/restoretopic/{id}', 'TopicController@restoreTopic');
//end list topics
// create topic
Route::get('/createtopic', 'TopicController@createTopic');
Route::post('/createtopic','TopicController@postCreateTopic');
// end create topic
//edit topic
Route::get('/topicedit/{id}', 'TopicController@editTopic');
Route::put('edit/topic/{id}', 'TopicController@putEditTopic');
//end edit topic
// delete topic
Route::get('/topicdelete/{id}', 'TopicController@topicDelete');
// end delete topic
//list publish companies
Route::get('/listpublishcompanies', 'PublishCompanyController@listPublishCompanies');
Route::get('/sdlistpublishcompanies', 'PublishCompanyController@sdPublishCompanies');
Route::get('/restorepublishcompany/{id}', 'PublishCompanyController@restorePublishCompany');
//end list publish companies
// edit publish company
Route::get('/editpublishcompany/{id}','PublishCompanyController@editPublishCompany');
Route::put('edit/publishcompany/{id}','PublishCompanyController@putPublishCompany');
// end edit publish company
// create publish company
Route::get('/createpublishcompany', 'PublishCompanyController@createPublishCompany');
Route::post('/createpublishcompany','PublishCompanyController@postCreatePublishCompany');
// end create publish company
// publish Company Delete
Route::get('/publishcompanydelete/{id}', 'PublishCompanyController@publishCompanyDelete');
// end publish Company Delete
//list author
Route::get('/listauthors','AuthorController@listAuthor');
Route::get('/sdlistauthors', 'AuthorController@sdListAuthors');
Route::get('/restoreauthor/{id}', 'AuthorController@restoreAuthor');
//end list author
//edit author
Route::get('/authoredit/{id}','AuthorController@editAuthor');
Route::put('edit/author/{id}','AuthorController@putEditAuthor');
//end edit author
//delete author
Route::get('/authordelete/{id}', 'AuthorController@authorDelete');
// end delete author
// create Author
Route::get('/createauthor','AuthorController@createAuthor');
Route::post('/createauthor','AuthorController@postCreateAuthor');
// end create Author
// list book
Route::get('/listbooks','BookController@listBook');
Route::get('/sdlistbooks', 'BookController@sdListBook');
Route::get('/restorebook/{id}', 'BookController@restoreBook');
// end list book
// Edit book
Route::get('/bookedit/{id}', 'BookController@editBook');
Route::put('/edit/book/{id}', 'BookController@putEditBook');
// end Edit book
// delete book
Route::get('/bookdelete/{id}', 'BookController@bookDelete');
//end delete book
// create book
Route::get('/createbook', 'BookController@createBook');
Route::post('/createbook','BookController@postCreateBook');
// end create book
Route::get('register','UserController@getregister');
Route::post('register','UserController@postregister');

Route::get('login', 'UserController@getlogin');
Route::post('login', 'UserController@postlogin');


Route::get('logout', 'UserController@logout');

Route::get('/books/{book}', 'BookController@show');
Route::get('/books/authors/{id}', 'AuthorController@showauthor');
Route::get('/books/topics/{id}', 'TopicController@showtopic');
Route::get('/books/publish/{id}', 'BookController@showpublish');
