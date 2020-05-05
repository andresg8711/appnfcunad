<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Impresora extends Model
{
    //
    public function impresions()
    {
        return $this->hasMany('App\Impresion');
    }
}
