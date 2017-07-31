<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
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
        $a = date('Y-m-d', strtotime($date));
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

    public function ordersPending()
    {
        $orders = Order::where('shipping_status','=','0')->get();
        return view('backend.searchorders.orderspending')->with('orders', $orders);
    }

    public function putEditStatusOrder1($id)
    {
        $input = Input::all();
        $order = Order::find($id);
        $order->update($input);
        return redirect('/orderspending');
    }

    public function ordersSent()
    {
        $orders = Order::where('shipping_status','=','1')->get();
        return view('backend.searchorders.orderssent')->with('orders', $orders);
    }

    public function putEditStatusOrder0($id)
    {
        $input = Input::all();
        $order = Order::find($id);
        $order->update($input);
        return redirect('/orderssent');
    } 

    public function searchSinceToDate(Request $request)
    {
        $input = Input::all();
        $since = $input['since'];
        $since = date('d-m-Y',strtotime($since));
        $a = $input['to'];
        $c = date('d-m-Y',strtotime($a)); 

        $b =strtotime($a);
        $to =$b + 86400;
        $to = date('Y-m-d',$to); 
        $orders = Order::whereBetween('order_date',[$since,$to])->get();
        return view('backend.searchorders.searchsincetodate')->with('orders', $orders)->with('since', $since)->with('c', $c);
    }  
}
