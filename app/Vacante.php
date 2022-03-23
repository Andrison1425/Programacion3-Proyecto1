<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{
    protected $table = 'vacantes';

    protected $fillable = [
        'nombre',
        'nombre',
        'ubicacion',
        'horario',
        'salario',
        'nombre_empresa',
        'descripcion',
        'requisitos',
        'beneficios',
        'email',
        'img_ref',
        'categoria',
        'txtBuscar',
        'tipo'
    ];
}
