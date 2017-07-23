<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;
use App\PublishCompanies;
use App\Topic;
use App\Order;
use App\Orderdetail;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;
use Newss\Http\Requests\CreateArticelRequest;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::all();
        return view('books.index')->with('books', $books);
    }

    public function create()
    {
        //
    }

    public function return()
    {
      return redirect('/books');
    }

    public function store(Request $request)
    {
        //
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
      $publish = PublishCompanies::where('name', $name)->first();
      $books = $publish->book;
      return view('books.showpublish')->with(['publish' => $publish, 'books' => $books]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
