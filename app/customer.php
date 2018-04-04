<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class customer extends Authenticatable
{
    protected $table = 'customers';
    protected $fillable = ['id','email','name','diachi','sodt','node','ngaysinh','update_at','matkhau'];
    public $timestamps = false;
}
