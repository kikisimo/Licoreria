<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrinktypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drinktypes', function (Blueprint $table) {
            $table->increments('cod_TB');
            $table->string('tipo');

            $table->string('descripcion');
            $table->timestamps();

            $table->string('descripcion');
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
        Schema::dropIfExists('drinktypes');
    }
}
