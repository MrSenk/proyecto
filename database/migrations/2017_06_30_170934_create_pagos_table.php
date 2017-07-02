<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('apoderado_id')->unsigned();
            $table->integer('alumno_id')->unsigned();
            $table->integer('cuota_id')->unsigned();
            $table->integer('monto');
            $table->string('fecha');
            $table->integer('estado_id')->unsigned();
            $table->foreign('apoderado_id')->references('apoderado_id')->on('alumnos');
            $table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->foreign('cuota_id')->references('id')->on('cuotas');
            $table->foreign('estado_id')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos');
    }
}
