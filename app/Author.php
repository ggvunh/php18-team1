<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use SoftDeletes;
    protected $date = ['deleted_at'];
    public $timestamp = false;
    protected $table = 'authors';
    protected $fillable = ['name', 'email', 'phone', 'address', 'story'];

    public function book()
    {
      return $this->hasMany('App\Book');
    }
}
