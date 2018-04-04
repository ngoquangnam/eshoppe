<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productsize extends Model
{
	protected $table = 'productsizes';
	protected $fillable = ['id','product_id','size_id'];
	public $timestamps = false;
}
