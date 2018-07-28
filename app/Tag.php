<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    public function listas()
    {
        return $this->belongsToMany('App\Lista');
    }
}
