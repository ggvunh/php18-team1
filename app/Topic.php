<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class Topic extends Model
{
	use SoftDeletes;
	protected $date = ['deleted_at'];
	public $timestamp = false;
	protected $fillable = ['name'];
	protected $table = 'topics';

	public function book()
	{
		return $this->hasMany('App\Book');
	}
}
