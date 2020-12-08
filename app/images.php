<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class images extends Model
{
    public function projet()
    {
       return $this->BelongsTo("App\projet",'projet_id');
    }
}
