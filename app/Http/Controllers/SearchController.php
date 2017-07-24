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
}
