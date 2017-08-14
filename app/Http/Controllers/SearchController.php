<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;
use App\Topic;
use App\PublishCompany;

class SearchController extends Controller
{
    public function searchAll(Request $Request)
    {
    	$key = $Request->tukhoa;
    	$books = Book::where('name','like',"%".$key."%")->get();
    	$authors = Author::where('name','like',"%".$key."%")
	   						->orWhere('phone','like',"%".$key."%")
    						->orWhere('address','like',"%".$key."%")->get();
    	$topics = Topic::where('name','like',"%".$key."%")->get();
    	$publishcompanies = PublishCompany::where('name','like',"%".$key."%")
    										->orWhere('phone','like',"%".$key."%")
    										->orWhere('address','like',"%".$key."%")->get();
    	return view('backend.searchbooks')->with('books',$books)->with('tukhoa',$key)->with('publishcompanies',$publishcompanies)->with('topics',$topics)->with('authors',$authors);
    }

    public function searchbook(Request $request)
    {
        $books = Book::all();

      if($request->key == '')
      {
        $books = Book::paginate(16);
      }
      else
      {
        $books = Book::where('name', 'like', '%' . $request->key . '%')
                          ->orWhere('language', 'like', '%' . $request->key . '%')
                          ->orWhere('price', 'like', $request->key)
                          ->orWhere('quantity', 'like', $request->key)
                          ->orWhere('detail', 'like', '%' . $request->key . '%')
                          ->paginate(16);
      }
      return view('books.search')->with('books', $books);
    }
}
