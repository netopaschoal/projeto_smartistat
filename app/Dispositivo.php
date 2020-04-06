<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    function dados(){
        return $this->hasMany('App\Dado');
    }
}
