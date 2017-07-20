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
	    return redirect('/createpublishcompany');
 	}
}
