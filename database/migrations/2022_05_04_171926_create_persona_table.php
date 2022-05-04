<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apPaterno');
            $table->string('apMaterno');
            $table->integer('edad');
            $table->string('FechNA');
            $table->string('direccion');
            $table->string('colonia');
            $table->string('ciudad');
            $table->string('estado');
            $table->string('Codpostal');
            $table->string('telefonos');
            $table->string('sexo');
            $table->string('Edo_civil');
            $table->string('ocupacion');
            $table->string('emp_aseg');
            $table->string('alergias');
            $table->string('T_credito');
            $table->integer('empresas_id')->unsigned();
            $table->foreign('empresas_id')->references('id')->on('empresa'); 
            $table->softDeletes();
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
        Schema::dropIfExists('persona');
    }
}
