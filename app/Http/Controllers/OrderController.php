<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\Orderdetail;

class OrderController extends Controller
{
    public function listOrders()
    {
    	$orders = Order::paginate(10);
    	return view('backend.listadmin.listorders')->with('orders', $orders);
    }

    public function listOrdersUseId($id)
    {
    	$user = User::find($id);
    	$orders = Order::withTrashed()->where('user_id',$id)->paginate(2);
    	return view('backend.searchorders.listorderuserid')->with('user',$user)->with('orders', $orders);
    }

    public function ordersDate($order_date)
    {
        $date = substr($order_date,0,10);
        $a = date('Y-m-d', strtotime($date));
        $orders = Order::whereDate('order_date',$date)->paginate(2);
        return view('backend.searchorders.listorderuserid')->with('orders',$orders)->with('date',$date);
        // $orders = Order::whereDate('order_date', $order_date)->paginate(2);
        // return view('backend.searchorders.listorderuserid')->with('orders',$orders);
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
        $orders = Order::where('shipping_status','=','0')->paginate(10);
        return view('backend.searchorders.orderspending')->with('orders', $orders);
    }

    public function putEditStatusOrder1($id)
    {
        // $input = Input::all();
        $order = Order::find($id);
        $order->shipping_status = 1;
        $order->status_order = 1;
        $order->save();
        // $order->update($input);
        return redirect('/orderspending');
    }

    public function ordersSent()
    {
        $orders = Order::where('shipping_status','=','1')->paginate(10);
        return view('backend.searchorders.orderssent')->with('orders', $orders);
    }

    public function putEditStatusOrder0($id)
    {
        // $input = Input::all();
        // $order = Order::find($id);
        // $order->update($input);
        $order = Order::find($id);
        $order->shipping_status = 0;
        $order->status_order = 0;
        $order->save();
        return redirect('/orderssent');
    }

    public function searchSinceToDate()
    {
        // $input = Input::all();
        // $since = $input['since'];
        // $since = date('Y-m-d - H:i:s',strtotime($since));
        // $a = $input['to'];
        // $c = date('d-m-Y',strtotime($a));

        // $b =strtotime($a);
        // $to =$b + 86400;
        // $to = date('Y-m-d - H:i:s',$to);
        // $orders = Order::whereBetween('order_date',[$since,$to])->get();
        // return view('backend.searchorders.searchsincetodate')->with('orders', $orders)->with('since', $since)->with('c', $c);
        $input = Input::all();
        $since = (isset($input['since'])) ? $input['since'] : '';
        $to = (isset($input['to'])) ? $input['to'] : '';
        if (empty($since)) 
            {
               $query = Order::whereBetween('order_date', [$to." 00:00:00", $to." 23:59:59"]);
            }
        elseif (empty($to)) 
            {
               $query = Order::whereBetween('order_date', [$since." 00:00:00", $since." 23:59:59"]);
            }
        else
            {
              $query = Order::whereBetween('order_date', [$since." 00:00:00", $to." 23:59:59"]); 
            }        
        $orderssums = $query->get();
        $orders = $query->paginate(2);
        $count = count($orderssums);
        $sum = 0;
        foreach ($orderssums as $order) 
            {
                $orderdetails = $order->order_detail;
                foreach ($orderdetails as $orderdetail) 
                {
                  $sum += $orderdetail['price'] * $orderdetail['quantity'];
                }
            }
        return view('backend.searchorders.searchsincetodate')->with('orders', $orders)->with('since', $since)->with('to', $to)->with('sum', $sum)->with('count', $count);
    }

}
