<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class DashboardController extends Controller
{
    public static function index()
    {	
    	$order = Order::all();
    	return view('backend.viewpage.dashboard',['order'=>$order]);
    }
}
