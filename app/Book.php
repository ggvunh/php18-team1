<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use SoftDeletes;
    protected $date = ['deleted_at'];
    public $timestamp = false;
    protected $table = 'books';
    protected $fillable = ['name', 'image', 'language', 'price', 'quantity',
                            'detail', 'topic_id', 'author_id', 'publish_id'];

    public function author()
    {
      return $this->belongsTo('App\Author');
    }

    public function topic()
    {
      return $this->belongsTo('App\Topic');
    }

    public function publish_companie()
    {
      return $this->belongsTo('App\PublishCompanies');
    }

    public function order_detail()
    {
      return $this->hasMany('App\OrderDetail');
    }
}
