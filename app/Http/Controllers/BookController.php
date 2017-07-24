<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Topic;
use App\PublishCompany;
use App\Author;
use App\Book;
use Illuminate\Http\UploadedFile;
use File;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::all();
        return view('books.index')->with('books', $books);
    }

    public function return()
    {
        return redirect('/books');
    }

    public function show(Book $book)
    {
        $books = Book::all();
        return view('books.show')->with(['book' => $book, 'books' => $books]);
    }

    public function showtopic($name)
    {
        $topic = Topic::where('name', $name)->first();
        $books = $topic->book;
        return view('books.showtopic')->with(['topic' => $topic, 'books' => $books]);
    }

    public function showauthor($name)
    {
        $author = Author::where('name', $name)->first();
        $books = $author->book;
        return view('books.showauthor')->with(['author' => $author, 'books' => $books]);
    }

    public function showpublish($name)
    {
        $publish = PublishCompany::where('name', $name)->first();
        $books = $publish->book;
        return view('books.showpublish')->with(['publish' => $publish, 'books' => $books]);
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
        $input = Input::all();
        if ($request->hasFile('image')) {

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
		$books = Book::all();
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
            
            $author = Author::pluck('name','id');
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
		$books = Book::onlyTrashed()->get();
		return view('backend.softdeleteadmin.sdlistbooks')->with('books',$books);
	}

	public function restoreBook($id)
	{
		$book = Book::onlyTrashed()->find($id);
		$book->restore($id);
		return redirect('/sdlistbooks');
	}
}
