<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    // Tabla
    protected $table = 'alumnos';
    // Key
    protected $primaryKey = 'id';
    // timestamps
    protected $timestamps = false;
    // LUL
    protected $fillable = [
    	'nombre',
    	'apellido',
    	'colegio',
    	'direccion',
    	'apoderado_id',
    ];
}
