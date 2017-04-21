<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('cod_prod');
            $table->string('nombre');
            $table->string('marca');
            $table->string('contenidoNeto');
            $table->date('fechaVencimiento');
            $table->integer('cot_cat')->unsigned();
            $table->foreign('cot_cat')->references('cot_cat')->on('categories');
            $table->integer('cod_TB')->unsigned();
            $table->foreign('cod_TB')->references('cod_TB')->on('drinktypes');
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
        Schema::dropIfExists('products');
    }
}
