<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Order;
use App\Book;
use App\User;
use App\Author;
use App\PublishCompany;
use App\Topic;
use Illuminate\Support\Facades\Auth;
class PDFController extends Controller
{
	public function getPDF(){
		$orders = Order::all();
		$pdf=PDF::loadview('pdf.listorders',['orders' => $orders]);
		return $pdf->download('listorders.pdf');
	}
	public function getPDFlistusers(){
		$users = User::all();
		$pdf=PDF::loadview('pdf.listusers',['users' => $users]);
		return $pdf->download('listusers.pdf');
	}
	public function getPDForderspending(){
		$orders = Order::where('shipping_status','=','0')->get();
		$pdf=PDF::loadview('pdf.listorderspending',['orders' => $orders]);
		return $pdf->download('listorderspending.pdf');
	}
	public function getPDForderssent(){
		$orders = Order::where('shipping_status','=','1')->get();
		$pdf=PDF::loadview('pdf.orderssent',['orders' => $orders]);
		return $pdf->download('orderssent.pdf');
	}
	public function getPDFlistbooks(){
		$books = Book::all();
		$pdf=PDF::loadview('pdf.listbooks',['books' => $books]);
		return $pdf->download('listbooks.pdf');
	}
	public function getPDFlistauthors(){
		$authors = Author::all();
		$pdf=PDF::loadview('pdf.listauthors',['authors' => $authors]);
		return $pdf->download('listauthors.pdf');
	}
	public function getPDFlistcompanies(){
		$companies = PublishCompany::all();
		$pdf=PDF::loadview('pdf.company',['companies' => $companies]);
		return $pdf->download('company.pdf');
	}
	public function getPDFlisttopics(){
		$topics = Topic::all();
		$pdf=PDF::loadview('pdf.topic',['topics' => $topics]);
		return $pdf->download('topic.pdf');
	}
	public function getPDFlistorders(){
		$orders = Order::all();
		$pdf=PDF::loadview('pdf.listorders',['orders' => $orders]);
		return $pdf->download('listorders.pdf');
	}

//order info
	public function getPDForderinfo(){
		
		$user_id = Auth::user()->id;
		$order = Order::withTrashed()->where('user_id', $user_id)->get();
		$pdf=PDF::loadview('pdf.orderinfo',['order' => $order]);
		return $pdf->download('order.pdf');
	}
}
