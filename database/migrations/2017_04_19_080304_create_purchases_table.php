<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('cod_purchase');
            $table->date('date');
            $table->integer('quantyti');
            $table->float('precy_unitary');

            $table->integer('cod_prod')->nullable()->unsigned();
            $table->foreign('cod_prod')->references('cod_prod')->on('products');

            $table->integer('cod_prov')->nullable()->unsigned();
            $table->foreign('cod_prov')->references('cod_prov')->on('providers');
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
        Schema::dropIfExists('purchases');
    }
}
