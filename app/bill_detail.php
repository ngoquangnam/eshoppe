<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill_detail extends Model
{
    protected $table = 'bill_details';
    protected $fillable = ['id','bill_id','product_id','qty'];
    public $timestamps = false;
}
