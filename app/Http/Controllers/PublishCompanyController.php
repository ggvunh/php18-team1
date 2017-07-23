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
	
	public function postCreatePublishCompany(Request $request)
    {
	    $input = Input::all();
	    $topic = PublishCompany::create($input);
	    return redirect('/listpublishcompanies');
 	}

 	public function listPublishCompanies()
 	{
 		$publishcompanies = PublishCompany::all();
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
}
