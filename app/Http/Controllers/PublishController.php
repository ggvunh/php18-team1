<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\PublishCompanies;
use File;

class PublishController extends Controller
{
    public function createPublishCompany() 
 	{
		return view('backend.createpublishcompany');
	}
	
	public function postCreatePublishCompany(Request $request)
    {
	    $input = Input::all();
	    $topic = PublishCompanies::create($input);
	    return redirect('/createpublishcompany');
 	}
}
