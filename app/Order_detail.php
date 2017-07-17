<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    use SoftDeletes;
    protected $date = ['deleted_at'];
    public $timestamp = false;
    protected $table = 'orders_details';
    protected $fillable = ['quantity', 'price', 'book_id', 'order_id'];

    public function order()
    {
      return $this->belongsTo('App\Order');
    }

    public function book()
    {
      return $this->belongsTo('App\Book');
    }
}
