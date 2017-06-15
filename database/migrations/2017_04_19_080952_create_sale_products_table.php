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
            $table->float('quantity');
            $table->string('codigof');
            $table->string('tax');
            $table->string('discount');
            $table->string('total');
            $table->integer('ci_client')->nullable()->unsigned();
            $table->foreign('ci_client')->references('ci_client')->on('clients');
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
