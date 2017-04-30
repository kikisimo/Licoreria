<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_sales', function (Blueprint $table) {
            $table->increments('cod_bill');
            $table->integer('cod_lico')->nullable()->unsigned();
            $table->foreign('cod_lico')->references('cod_lico')->on('liquor_stores');
            $table->integer('cod_sale_product')->nullable()->unsigned();
            $table->foreign('cod_sale_product')->references('cod_VP')->on('sale_products');
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
        Schema::dropIfExists('bill_sales');
    }
}
