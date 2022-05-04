<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('cargo');
            $table->string('telefono');
            $table->string('domicilio');
            $table->string('nombre_jef');
            $table->string('cargo_jef');
            $table->string('nombre_fami');
            $table->string('domicilio_fam');
            $table->string('telef_fami');
            $table->string('nombrE_trab');
            $table->string('domicilio_trab');
            $table->string('cargo_fam');
            $table->string('telefono_trab');
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
        Schema::dropIfExists('empresa');
    }
}
