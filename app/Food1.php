<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food1 extends Model
{
    protected $table = 'foodaaps';
   
    protected $fillable = ['category','name','description','itemtype','status','quantity','finalweight','weight'];
    
    protected $dates=['created_at','updated_at'];
}
