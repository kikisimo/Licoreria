<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('cod_sale');
            $table->string('observation');
            $table->string('codigof');
            $table->string('tax');
            $table->string('discount');
            $table->string('total');
            $table->integer('ci_client')->nullable()->unsigned();
            $table->foreign('ci_client')->references('ci_client')->on('clients');



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
        Schema::dropIfExists('sales');
    }
}
