<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistentes', function (Blueprint $table) {
            $table->id();
            $table->string('apellido_p',60);
            $table->string('apellido_m',60);
            $table->string('nombre',80);
            $table->string('dni',8);
            $table->dateTime('fecha_nacimiento');
            $table->enum('sexo',['Masculino','Femenino','Prefiero no decirlo']);
            $table->string('ubi_actual',100);
            $table->string('centro_lab_act',100);
            $table->string('cargo',100);
            $table->enum('grado_academico',['Doctorado','Maestria','Bachiller','Pregrado','Tecnico','Otros']);
            $table->string('profesion',100);
            $table->string('correo',100);
            $table->string('num_celular',9);
            $table->enum('agremiado',['Si','No']);
            $table->string('num_colegiatura',8)->nullable();
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
        Schema::dropIfExists('asistentes');
    }
}
