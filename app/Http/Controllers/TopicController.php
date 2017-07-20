<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Topic;
use File;

class TopicController extends Controller
{
    public function createTopic() 
    {
		return view('backend.createtopic');
	}

	public function postCreateTopic(Request $request)
    {
        $input = Input::all();
        $topic = Topic::create($input);
    	return redirect('/createtopic');
 	}
}
