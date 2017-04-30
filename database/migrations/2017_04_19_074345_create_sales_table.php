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
            /*$table->date('fecha');
            $table->dateTime('hora');*/
            $table->string('observation');
            $table->integer('id_user')->nullable()->unsigned();
            $table->foreign('id_user')->references('id_user')->on('usuarios');

            $table->integer('ci_client')->nullable()->unsigned();
            $table->foreign('ci_client')->references('ci_client')->on('clients');

            $table->integer('cod_reservation')->nullable()->unsigned();
            $table->foreign('cod_reservation')->references('cod_reservation')->on('reservations');

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
