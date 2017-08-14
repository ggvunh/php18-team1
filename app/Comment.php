<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  // use SoftDeletes;
  // protected $date = ['deleted_at'];
  public $timestamp = false;
  protected $table = 'comments';
  protected $fillable = ['content','book_id', 'user_id'];

  public function book()
  {
    return $this->belongsTo('App\Book');
  }

  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
