<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    //
    public function empleados()
    {
        return $this->hasMany('App\Empleado');
    }
}
