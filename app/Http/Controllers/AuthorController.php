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
	    return redirect('/listauthors');
 	}
 	public function listAuthor()
	{
		$authors = Author::all();
		return view('backend.listadmin.listauthors')->with('authors',$authors);
	}

	public function editAuthor($id)
	{
		$author = Author::find($id);
		return view('backend.editadmin.editauthor')->with('author',$author);
	}

	public function putEditAuthor($id)
	{
		$author = Author::find($id);
		$author->update(Input::all());
		return redirect('/listauthors');
	}

	public function authorDelete($id)
	{
		Author::destroy($id);
		return redirect('/listauthors');
	}

	public function sdListAuthors()
	{
		$authors = Author::onlyTrashed()->get();
		return view('backend.softdeleteadmin.sdlistauthors')->with('authors',$authors);
	}

	public function restoreAuthor($id)
	{
		$author = Author::onlyTrashed()->find($id);
		$author->restore($id);
		return redirect('sdlistauthors');
	}
}
