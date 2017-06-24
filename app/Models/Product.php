<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function type() {
        return $this->belongsTo(Type::class);
    }

    public function prices() {
        return $this->hasMany(Price::class);
    }

    public function photos() {
        return $this->hasMany(Photo::class);
    }
}
