<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Furgon extends Model
{
    // Tabla
    protected $table = 'furgones';
    // Key
    protected $primaryKey = 'id';
    // Kill
    public $timestamps = false;
    // LUL
    protected $fillable = [
    	'marca',
    	'modelo',
    	'capacidad',
    ];
}
