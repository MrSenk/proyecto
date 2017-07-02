<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    // Tabla
    protected $table = 'estados';
    // Clave primaria
    protected $primaryKey = 'id';
    // :V
    public $timestamps = false;
    // LUL
    protected $fillable = [
    	'descripcion',
    ];
}
