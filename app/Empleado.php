<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
    public function impresions()
    {
        return $this->hasMany('App\Impresion');
    }
    public function area()
    {
        return $this->belongsTo('App\Area');
    }
    public function cargo()
    {
        return $this->belongsTo('App\Cargo');
    }
}
