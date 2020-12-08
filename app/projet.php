<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projet extends Model
{
    public function images()
    {
        return $this->hasMany('App\images');
    }
}
