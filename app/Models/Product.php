<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        $this->belongsTo('App\Category');
    }
    public function photos(){
        $this->hasMany('App\Photo');
    }
}
