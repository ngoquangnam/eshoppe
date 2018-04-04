<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class admin extends Authenticatable
{
	protected $table = 'admins';
	protected $fillable = ['name','email'];
	public $timestamps = false;
	
	public function product()
	{
		return $this->hasMany('App\product');
	}
}
