<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_products', function (Blueprint $table) {
            $table->increments('cod_sale_product');
            $table->float('cantidad');
            $table->integer('cod_sale')->nullable()->unsigned();
            $table->foreign('cod_sale')->references('cod_venta')->on('sales');
            $table->integer('cod_prod')->nullable()->unsigned();
            $table->foreign('cod_prod')->references('cod_prod')->on('products');
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
        Schema::dropIfExists('sale_products');
    }
}
