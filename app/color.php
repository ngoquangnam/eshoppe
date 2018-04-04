<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class color extends Model
{
	protected $table = 'colors';
	protected $fillable = ['color','keyword'];
	public $timestamps = false;
	public function product()
	{
		return $this->belongsToMany('App\product','App\productcolor');
	}
}
