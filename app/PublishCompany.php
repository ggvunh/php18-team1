<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class PublishCompany extends Model
{
    use SoftDeletes;
    protected $date = ['deleted_at'];
    public $timestamp = false;
    protected $table = 'publish_companies';
    protected $fillable = ['name', 'email', 'phone', 'address'];

    public function book()
    {
      return $this->hasMany('App\Book');
    }
}
