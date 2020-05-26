<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foodaap extends Model
{
    protected $table = 'foodaaps';
   
    protected $fillable = ['category','name','description','itemtype','status','quantity','quantity_units','finalweight','weight'];
    protected $dates=['created_at','updated_at'];
}
