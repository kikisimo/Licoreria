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
            $table->increments('cod_biil_purchase');
            $table->integer('cod_purchase')->nullable()->unsigned();
            $table->foreign('cod_purchase')->references('cod_purchase')->on('purchases');
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
