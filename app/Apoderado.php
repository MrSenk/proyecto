<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apoderado extends Model
{
    // Tabla
    protected $table = 'apoderados';
    // Key
    protected $primaryKey = 'id';
    // Kill
    public $timestamps = false;
    // :V
    protected $fillable = [
    	'nombre',
    	'apellido',
    	'telefono',
    	'email',
    	'direccion',
    	'furgon_id',
    ];
}
