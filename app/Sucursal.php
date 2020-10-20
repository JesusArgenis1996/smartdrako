<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    public $table = "sucursales";
    protected $fillable = [
        'nombre_sucursal','nombre_calle','nombre_colonia','numero_exterior','numero_interior','codigo_postal','ciudad','pais'
    ];

    public function empleados(){
        return $this->hasMany('App\Empleado');
    }
}
