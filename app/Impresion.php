<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Impresion extends Model
{
    //
    public function empleado()
    {
        return $this->belongsTo('App\Empleado');
    }
    public function impresora()
    {
        return $this->belongsTo('App\Impresora');
    }
}
