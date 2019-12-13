<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    
    public function Empleado()
    {
        return $this->hasOne('App\Empleado');
    }
    public function empleados()
    {
        return $this->belongsToMany('App\Empleado');
    }
}
