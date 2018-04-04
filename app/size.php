<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class size extends Model
{
	protected $table = 'sizes';
	protected $fillable = ['size','keyword'];
	public $timestamps = false;
	public function product()
	{
		return $this->belongsToMany('App\product','App\productsize');
	}
}
