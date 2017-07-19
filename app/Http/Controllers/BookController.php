<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Topic;
use App\PublishCompanies;
use App\Author;
use App\Book;
use Illuminate\Http\UploadedFile;
use File;

class BookController extends Controller
{
    public function createBook()
 	{
		$author = Author::pluck('name','id');
		$publish = PublishCompanies::pluck('name','id');
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
        $author = Author::pluck('name','id');
		$publish = PublishCompanies::pluck('name','id');
		$topic = Topic::pluck('name','id');
		$book = Book::create($input);
		return view('backend.createbook')->with('author',$author)->with('publish',$publish)->with('topic',$topic);
	}
}
