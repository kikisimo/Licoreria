<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_purchases', function (Blueprint $table) {
            $table->increments('cod_facturaC');
            $table->integer('cod_com')->unsigned();
            $table->foreign('cod_com')->references('cod_com')->on('purchases');
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
        Schema::dropIfExists('bill_purchases');
    }
}
