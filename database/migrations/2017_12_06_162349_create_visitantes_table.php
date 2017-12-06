<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitante', function (Blueprint $table) {
            $table->increments('id_visitante');
            $table->timestamp('fecha_hora_entrada');
            $table->integer('cedula');
            $table->integer('n_pase');
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fecha_nacimiento');
            $table->integer('edad');
            $table->string('zona_residencia');
            $table->integer('id_gerencia')->unsigned();
            $table->foreign('id_gerencia')->references('id_gerencia')->on('gerencia');
            $table->integer('id_tipo_visita')->unsigned();
            $table->foreign('id_tipo_visita')->references('id_tipo_visita')->on('tipo_visita');
            $table->string('responsable');
            $table->timestamp('fecha_hora_salida');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->string('observacion');
            $table->integer('n_certificado');
            $table->integer('estatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitante');
    }
}
