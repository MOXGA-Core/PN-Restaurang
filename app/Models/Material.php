<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public $timestamps = false;

    public function renderIcon() {
        return '<img src="'.asset($this->iconImage).'" alt="'.$this->name.'" style="width: 16px; height: 16px;">';
    }
}
