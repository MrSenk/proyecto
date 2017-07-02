<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    // Tabla
    protected $table = 'pagos';
    // Key
    protected $primaryKey = 'id';
    // TS
    protected $timestamps = false;
    // Editables
    protected $fillable = [
    	'apoderado_id',
    	'alumno_id',
    	'cuota_id',
    	'monto',
    	'fecha',
    	'estado_id',
    ];
}
