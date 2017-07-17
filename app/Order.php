<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use SoftDeletes;
    protected $date = ['deleted_at'];
    public $timestamp = false;
    protected $table = 'orders';
    protected $fillable = ['order_date', 'status_order', 'phone', 'shipping_status', 'note', 'address', 'user_id'];

    public function order_detail()
    {
      return $this->hasMany('App\Order_detail');
    }

    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
