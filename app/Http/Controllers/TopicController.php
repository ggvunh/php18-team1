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

  public function showtopic($id)
  {
      $topic = Topic::where('id', $id)->first();
      $books = $topic->book;
      
      return view('books.showtopic')->with(['topic' => $topic, 'books' => $books]);
  }

	public function postCreateTopic(Request $request)
    {
        $input = Input::all();
        $topic = Topic::create($input);
    	  return redirect('/listtopics');
 	}

 	public function listTopics()
 	{
 		$topics = Topic::paginate(10);
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

 	public function topicDelete($id)
 	{
 		Topic::destroy($id);
 		return redirect('/listtopics');
 	}

 	public function sdListTopics()
 	{
 		$topics = Topic::onlyTrashed()->paginate(10);
 		return view('backend.softdeleteadmin.sdlisttopics')->with('topics',$topics);
 	}

 	public function restoreTopic($id)
 	{
 		$topic = Topic::onlyTrashed()->Find($id);
 		$topic->restore($id);
 		return redirect('/sdlisttopics');
 	}
}
