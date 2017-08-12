<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Excel;
use App\Author;
use App\Book;
use App\Order;
use App\Topic;
use App\PublishCompany;
use App\User;

class ExcelController extends Controller
{
    public function getExportauthors(){
    	$export = Author::all();
    	Excel::create('Export Data', function($excel) use ($export){
    		$excel->sheet('Sheet 1', function($sheet) use ($export){
    			$sheet->fromArray($export);
    		});
    	})->export('xlsx');
    }
    public function getExportbooks(){
    	$export = Book::all();
    	Excel::create('Export Data', function($excel) use ($export){
    		$excel->sheet('Sheet 1', function($sheet) use ($export){
    			$sheet->fromArray($export);
    		});
    	})->export('xlsx');
    }
    public function getExportorders(){
    	$export = Order::all();
    	Excel::create('Export Data', function($excel) use ($export){
    		$excel->sheet('Sheet 1', function($sheet) use ($export){
    			$sheet->fromArray($export);
    		});
    	})->export('xlsx');
    }
    public function getExporttoppics(){
    	$export = Topic::all();
    	Excel::create('Export Data', function($excel) use ($export){
    		$excel->sheet('Sheet 1', function($sheet) use ($export){
    			$sheet->fromArray($export);
    		});
    	})->export('xlsx');
    }
    public function getExportcompanies(){
    	$export = PublishCompany::all();
    	Excel::create('Export Data', function($excel) use ($export){
    		$excel->sheet('Sheet 1', function($sheet) use ($export){
    			$sheet->fromArray($export);
    		});
    	})->export('xlsx');
    }
     public function getExportusers(){
    	$export = User::all();
    	Excel::create('Export Data', function($excel) use ($export){
    		$excel->sheet('Sheet 1', function($sheet) use ($export){
    			$sheet->fromArray($export);
    		});
    	})->export('xlsx');
    }
     public function getExportorderspending(){
    	$export = Order::where('shipping_status','=','0')->get();
    	Excel::create('Export Data', function($excel) use ($export){
    		$excel->sheet('Sheet 1', function($sheet) use ($export){
    			$sheet->fromArray($export);
    		});
    	})->export('xlsx');
    }
    public function getExportorderssent(){
    	$export = Order::where('shipping_status','=','1')->get();
    	Excel::create('Export Data', function($excel) use ($export){
    		$excel->sheet('Sheet 1', function($sheet) use ($export){
    			$sheet->fromArray($export);
    		});
    	})->export('xlsx');
    }

    //trang profile
     public function getExportorderinfo($id){
    	 $user_id = Auth::user()->id;
     	 $export = Order::all()->where('user_id', $user_id);
    	Excel::create('Export Data', function($excel) use ($export){
    		$excel->sheet('Sheet 1', function($sheet) use ($export){
    			$sheet->fromArray($export);
    		});
    	})->export('xlsx');
    }

    //report admin


}
