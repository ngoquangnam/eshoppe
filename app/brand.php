<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    protected $table = 'brands';
    protected $fillable = ['id','brand','category_id'];
    public $timestamps = false;

    public function product()
    {
    	return $this->hasMany('App\product');
    }
    public function category()
    {
    	return $this->belongTo('App\category');
    }
}
