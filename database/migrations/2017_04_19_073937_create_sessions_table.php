<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->increments('cod_sesion');
           /* $table->date('fecha_ent');
            $table->date('fecha_sal');
            $table->Time('hora_ent');
            $table->Time('hora_sal');*/
            $table->integer('id_user')->nullable()->unsigned();
            $table->foreign('id_user')->references('id_user')->on('usuarios');
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
        Schema::dropIfExists('sessions');
    }
}
