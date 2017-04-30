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
            $table->string('name');
            $table->string('brand');
            $table->string('content');
            $table->date('due_date');
            $table->integer('cod_cat')->nullable()->unsigned();
            $table->foreign('cod_cat')->references('cod_cat')->on('categories');
            $table->integer('cod_dt')->nullable()->unsigned();
            $table->foreign('cod_dt')->references('cod_tb')->on('drinktypes');
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
