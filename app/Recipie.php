<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipie extends Model
{
     protected $table = 'recipie';
    protected $fillable = ['group','recipiename','quantity','energy','fat','carbohydrate','protein','fat_1'];
    //protected $dates=['created_at','updated_at'];

 
}


