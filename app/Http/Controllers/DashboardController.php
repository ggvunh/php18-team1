<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Book;
use App\Author;
use App\Topic;
use App\PublishCompany;
use App\User;

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
    	return view('backend.viewpage.dashboard',['order'=>$order,'book'=>$book,'author'=>$author,'topic'=>$topic,'publish'=>$publish,'user'=>$user]);
    }
}
