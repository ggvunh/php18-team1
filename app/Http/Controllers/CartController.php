<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Session;
use Auth;
use App\Order;
use App\OrderDetail;
use DateTime;

class CartController extends Controller
{
    public function addcart($id)
    {
        $book = Book::find($id);
        Cart::add($id, $book->name, 1, $book->price, ['image' => $book->image]);
        $count = Cart::count();
        return response(['count' => $count], 200);
    }

    public function loadCarts()
    {
       $count = Cart::count();
       $data = Cart::content();
       return response(['count' => $count, 'data' => $data], 200);
    }

    public function cartshow()
    {
      return view('books.cart');
    }

    public function checkout()
    {
      return view('books.checkout');
    }

    public function deleteCart($rowId)
    {
      Cart::remove($rowId);
      $count = Cart::count();
      //return response(['count' => $count], 200);
      return redirect('/cartshow')->with('count', $count)->withSuccess('Cart has been deleted');
    }

    public function postsavecart(Request $req)
    {
      $submit = $req->Input('submit');
      if($submit == 'submit')
      {
          $phone = $req->Input('phone');
          //dd($phone);
          $datetime = new DateTime('now');
          $order = Order::create(['order_date' => $datetime, 'status_order' => 1, 'phone' => $req->Input('phone'), 'shipping_status' => 0,
                                  'note' => $req->Input('notes'), 'address' => $req->Input('adress'), 'user_id' => Auth::user()->id]);
          //dd($order);
          $order_detail = Cart::content();
          foreach($order_detail as $item){
            OrderDetail::create(['quantity' => $item->qty, 'price' => $item->price, 'book_id' => $item->id, 'order_id' => $order->id]);
          }
      // }else
      // {
      //      MsgBox("Bạn có chắc muốn hủy đơn hàng?", vbOkCancel, "Thông Báo!");
      }
      Cart::destroy();
      return redirect('/');
    }

    public function downqty($rowId)
    {
        //dd($rowId);
        $item = Cart::get($rowId);
        Cart::update($rowId, $item->qty - 1);
        $total = Cart::total();
        return response(['qty' => $item->qty, 'subtotal' => number_format($item->subtotal,2), 'total' => $total], 200);
    }

    public function upqty($rowId)
    {
      //dd($rowId);
      $item = Cart::get($rowId);
      Cart::update($rowId, $item->qty + 1);
      $total = Cart::total();
      return response(['qty' => $item->qty, 'subtotal' => number_format($item->subtotal,2), 'total' => $total], 200);
    }
}
