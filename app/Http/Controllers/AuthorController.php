<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Author;
use File;

class AuthorController extends Controller
{
    public  function createAuthor() 
 	{
		return view('backend.createauthor');
	}

	public function postCreateAuthor(Request $request)
    {
        $input = Input::all();
        $topic = Author::create($input);
	    return redirect('/createauthor');
 	}
}
