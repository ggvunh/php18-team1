<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;
use App\Topic;
use App\PublishCompany;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Query\Builder;

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

    // public function search()
    // {
    //     $keyword = Input::get('$keyword', ' ');
    //     $topic = Input::get('topic', '');
    //     $books = Book::search($keyword)->paginate(6);
    //     //dd($books);
    //     return view('books.search')->with('books',$books);
    // }
    public function searchbook(Request $request)
    {
        $books = Book::all();

        if($request->key == '')
        {
          $books = Book::paginate(16);
        }
        else
        {
          $keyword = $request->key;
          $books = Book::whereHas('Author', 'Topic', function ($query) use($keyword) {
                                $query->where('name', 'like', '%' . $keyword . '%');
                              //dd($query);
                            })->orwhere('name', 'like', '%' .$keyword. '%')
                                ->orWhere('language', 'like', '%' . $request->key . '%')
                                ->orWhere('price', 'like', $request->key)
                                ->orWhere('quantity', 'like', $request->key)
                                ->orWhere('detail', 'like', '%' . $request->key . '%')
                                ->paginate(16);
        }
        return view('books.search')->with('books', $books);

    }
}
