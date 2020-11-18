<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo');
            $table->string('nombre',45);
            $table->string('aPaterno',45);
            $table->string('aMaterno',45);
            $table->string('telefono');
            $table->unsignedInteger('ciclos_id')->index('fk_alumnos_ciclos_idx')->unsigned();
            $table->unsignedInteger('carreras_id')->index('fk_alumnos_carreras_idx')->unsigned();
            $table->unsignedInteger('solicitudes_id')->index('fk_alumnos_solicitudes_idx')->unsigned();
            $table->boolean('Dominio')->default(0);
            $table->boolean('Moodle')->default(0);
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
        Schema::dropIfExists('alumnos');
    }
}
