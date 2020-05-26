<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipie extends Model
{
     protected $table = 'recipie';
    protected $fillable = ['group','recipiename','quantity'];
    //protected $dates=['created_at','updated_at'];

 
}


