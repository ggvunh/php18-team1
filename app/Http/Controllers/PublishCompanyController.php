<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\PublishCompany;
use File;

class PublishCompanyController extends Controller
{
  public function createPublishCompany()
 	{
		return view('backend.createpublishcompany');
	}

  public function showpublish($id)
  {
      $publishs = PublishCompany::where('id', $id)->first();
      $books = $publishs->book;
      dd($books);
      return view('books.showpublish')->with(['publishs' => $publishs, 'books' => $books]);
  }

	public function postCreatePublishCompany(Request $request)
    {
	    $input = Input::all();
	    $topic = PublishCompany::create($input);
	    return redirect('/listpublishcompanies');
 	}

 	public function listPublishCompanies()
 	{
 		$publishcompanies = PublishCompany::paginate(10);
 		return view('backend.listadmin.listpublishcompanies')->with('publishcompanies', $publishcompanies);
 	}

 	public function editPublishCompany($id)
 	{
 		$publishcompany = PublishCompany::find($id);
 		return view('backend.editadmin.editpublishcompany')->with('publishcompany', $publishcompany);
 	}

 	public function putPublishCompany($id)
 	{
 		$publishcompany = PublishCompany::find($id);
 		$publishcompany->update(Input::all());
 		return redirect('/listpublishcompanies');
 	}

 	public function publishCompanyDelete($id)
 	{
 		PublishCompany::destroy($id);
 		return redirect('/listpublishcompanies');
 	}

 	public function sdPublishCompanies()
 	{
 		$publishcompanies = PublishCompany::onlyTrashed()->paginate(10);
 		return view('backend.softdeleteadmin.sdlistpublishcompanies')->with('publishcompanies',$publishcompanies);
 	}

 	public function restorePublishCompany($id)
 	{
 		$publishcompanies = PublishCompany::onlyTrashed()->find($id);
 		$publishcompanies->restore($id);
 		return redirect('/sdlistpublishcompanies');
 	}
}
