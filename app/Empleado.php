<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{

    protected $fillable = [
        'nombre_empleado',
        'RFC',
        'puesto',
        
    ];
    public function sucursal(){
        return $this->belongsTo('App\Sucursal');
    }
}
