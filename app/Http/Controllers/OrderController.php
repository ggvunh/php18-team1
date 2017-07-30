<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\Orderdetail;

class OrderController extends Controller
{
    public function listOrders()
    {
    	$orders = Order::withTrashed()->get();
    	return view('backend.listadmin.listorders')->with('orders', $orders);
    }

    public function listOrdersUseId($id)
    {
    	$user = User::find($id);
    	$orders = Order::withTrashed()->where('user_id',$id)->get();
    	return view('backend.searchorders.listorderuserid')->with('user',$user)->with('orders', $orders);
    }

    public function ordersDate($order_date)
    {
        $date = substr($order_date,0,10);
        $a = date('d-m-Y', strtotime($date));
        dd($a);
        $orders = Order::withTrashed()->where('order_date','like',"%".$date."%")->get();
        return view('backend.searchorders.listorderuserid')->with('orders',$orders)->with('date',$date);
    }

    public function orderDetailOrderId($id)
    {
        $orderdetails = Orderdetail::where('order_id','=',$id)->get();
        $count = count($orderdetails);
        $sum = 0;
        foreach ($orderdetails as $orderdetail) {
            $sum += $orderdetail['price'] * $orderdetail['quantity'];
        }
        return view('backend.listorderdetail.listorderdetails')->with('orderdetails', $orderdetails)->with('sum', $sum);
    }

        
}
