<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PublishCompanies extends Model
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
