<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\OrderDetail;

class ProfileController extends Controller
{
	public function index()
	{
		return view('profile.index');
	}
    public function orders()
     {	
    	 $user_id = Auth::user()->id;
     	 $order = Order::withTrashed()->where('user_id', $user_id)->get();
     	 return view('profile.orders',['order'=>$order]);
    }
    public function getlistdetail($id)
    {	
        $orderdetail = OrderDetail::where('order_id', '=', $id)->get();
    	return view('profile.orderdetail',['orderdetail'=>$orderdetail]);
     }
    public function getdelete($id)
    {
        $order =  Order::find($id);

        if($order->status_order == 1)
        {
            notificationMgs('error','Bạn không thể hủy đơn hàng vì đã thanh toán');  
            return redirect('order/list/'.Auth::user()->id);
        }
        else
        {    
            notificationMgs('success','Bạn đã hủy đơn hàng thành công'); 
            $order->delete();

            return redirect('order/list/'.Auth::user()->id);
        }
    }}