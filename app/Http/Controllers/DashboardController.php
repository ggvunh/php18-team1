<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Book;
use App\Author;
use App\Topic;
use App\PublishCompany;
use App\User;
use App\Comment;

class DashboardController extends Controller
{
    public static function index()
    {
    	$order = Order::all();
    	$book = Book::all();
    	$author = Author::all();
    	$topic = Topic::all();
    	$publish = PublishCompany::all();
    	$user = User::all();
        // $dateto = date('Y-m-d');
        // $datesince = strtotime('-7 days');
        // $datesince = date('Y-m-d',$datesince);
        // dd($datesince);
        // $comment = Comment::whereBetween('created_at', [$datesince." 00:00:00", $dateto." 23:59:59"])->get();
        // return view('backend.viewpage.dashboard',['order'=>$order,'book'=>$book,'author'=>$author,'topic'=>$topic,'publish'=>$publish,'user'=>$user,'comment'=>$comment]);
    	return view('backend.viewpage.dashboard',['order'=>$order,'book'=>$book,'author'=>$author,'topic'=>$topic,'publish'=>$publish,'user'=>$user]);
    }
}
