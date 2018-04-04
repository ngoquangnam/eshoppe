<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    protected $table = 'bills';
    protected $fillable = ['total','date_order','id'];
    public $timestamps = true;

}
