<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    public function empleado()
    {
        return $this->hasMany('App\Empleado');
    }
    public function jefe()
    {
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }
}
