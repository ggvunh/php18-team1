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
    	return redirect('/listtopics');
 	}

 	public function listTopics()
 	{
 		$topics = Topic::all();
 		return view('backend.listadmin.listtopics')->with('topics',$topics);
 	}

 	public function editTopic($id)
 	{
 		$topic = Topic::find($id);
 		return view('backend.editadmin.edittopic')->with('topic', $topic);
 	}

 	public function puteditTopic($id)
 	{
 		$topic = Topic::find($id);
 		$topic->update(Input::all());
 		return redirect('/listtopics');
 	}
}
