<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productcolor extends Model
{
	protected $table = 'productcolors';
	protected $fillable = ['id','product_id','color_id'];
	public $timestamps = false;
}
