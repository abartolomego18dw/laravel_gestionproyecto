<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    public function Proyecto()
    {
        return $this->hasOne('App\Proyecto');
    }
}
