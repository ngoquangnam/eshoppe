<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['id','name','parent_id'];
    public $timestamps = false;

    public function product()
    {
    	return $this->hasMany('App\product');
    }
    public function brand()
    {
    	return $this->hasMany('App\brand');
    }

}
