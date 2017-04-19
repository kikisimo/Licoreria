<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('ci_persona');
            $table->string('nombre');
            $table->string('apellido');
            $table->float ('telefono');
            $table->string('direccion');
            $table->string('correo')->unique();
            $table->integer('id_rol')->unsigned();
            $table->foreign('id_rol')->references('id_rol')->on('roles');
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
        Schema::dropIfExists('people');
    }
}
