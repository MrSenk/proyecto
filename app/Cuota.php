<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuota extends Model
{
    // Definir tabla
    protected $table = 'cuotas';
    // Clave primaria
    protected $primaryKey = 'id';
    // Kill create & delete
    public $timestamps = false;
    // Columnas editables
    protected $fillable = [
    	'mes',
    ];
}
