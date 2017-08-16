<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Topic;
use App\PublishCompany;
use App\Author;
use App\Book;
use App\Comment;
use Illuminate\Http\UploadedFile;
use File;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Pagination\Paginator;

class BookController extends Controller
{

  public function index()
  {
      $books = Book::orderBy('id', 'desc')->paginate(8);
      //$books->orderBy('id', 'desc');
      $authors = Author::paginate(4);
      $publishs = PublishCompany::paginate(4);
      $topics = Topic::paginate(4);
      return view('books.index')->with('books', $books);
  }

  public function viewhome()
  {
      return redirect('/books');
  }

  public function show(Book $book)
  {
      $books = Book::all();
      $author = Author::all();
      $publish = PublishCompany::all();
      $topic = Topic::all();
      $comments = $book->comment;
      //dd($comments);
      return view('books.show')->with(['book' => $book, 'books' => $books, 'author' =>$author, 'topic' => $topic, 'comments' => $comments])->with('publish', $publish);
  }

  public function createBook()

 	{
		$author = Author::pluck('name','id');
		$publish = PublishCompany::pluck('name','id');
		$topic = Topic::pluck('name','id');
		return view('backend.createbook')->with('author',$author)->with('publish',$publish)->with('topic',$topic);
	}

	public function postCreateBook(Request $request)
  {
    $this->validate($request,
        ['name'=>'required|unique:books,min:3'],
        ['name.required'=>'chua nhap ten',
          'name.unique'=>'ten da ton tai',
          'name.min'=>'name phai lon hon 3 ki tu']
        );
    $input = Input::all();
    if ($request->hasFile('image'))
    {

      $file_name = time() . '-' .$request->file('image')->getClientOriginalName();
      $input['image'] = $file_name;
      $request->file('image')->move('upload', $file_name);
    }
   	else
   	{
   		$input['image']='';
   	}
    $author = Author::pluck('name','id');
    $publish = PublishCompany::pluck('name','id');
    $topic = Topic::pluck('name','id');
    $book = Book::create($input);
    return redirect('/listbooks');
  }

	public function listBook()
	{
		$books = Book::paginate(10);
		return view('backend.listadmin.listbooks')->with('books',$books);
	}

	public function editBook($id)
	{
		$book = Book::find($id);
		$author = Author::pluck('name','id');
		$publish = PublishCompany::pluck('name','id');
		$topic = Topic::pluck('name','id');
		return view('backend.editadmin.editbook')->with('book', $book)->with('author', $author)->with('publish', $publish)-> with('topic', $topic);
	}

	public function putEditBook(Request $request,$id)
	{
		$book = Book::find($id);
		$input = Input::all();
    if ($request->hasFile('image'))
    {
            $file_name = time() . '-' .$request->file('image')->getClientOriginalName();
            $input['image'] = $file_name;
            $request->file('image')->move('upload', $file_name);
            //delete img
      			$a = $book['image'];
      			$b = ('upload/'.$a);
      			File::delete($b);
      			// end delete
      			$a = $file_name;
    }
		$publish = PublishCompany::pluck('name','id');
		$topic = Topic::pluck('name','id');
		$book->update($input);
		return redirect('/listbooks');
  }

	public function bookDelete($id)
	{
		Book::destroy($id);
		return redirect('/listbooks');
	}

	public function sdListBook()
	{
		$books = Book::onlyTrashed()->paginate(10);
		return view('backend.softdeleteadmin.sdlistbooks')->with('books',$books);
	}

	public function restoreBook($id)
	{
		$book = Book::onlyTrashed()->find($id);
		$book->restore();
		return redirect('/sdlistbooks');
	}
}
