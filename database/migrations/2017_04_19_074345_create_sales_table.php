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
            $table->increments('cod_venta');
            $table->date('fecha');
            $table->dateTime('hora');
            $table->string('observacion');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
// ERROR ARREGLAR: COMENTE ESTA PARTE PARA Q LOS MIGRATES FUNCIONARAN, POR ALGUNA RAZON DA ERROR :(  TRISTEZA TOTAL
            $table->integer('ci_cliente')->unsigned();
            $table->foreign('ci_cliente')->references('ci_cliente')->on('clients');
// HASTA ACA.
            $table->integer('cod_reserva')->unsigned();
            $table->foreign('cod_reserva')->references('cod_reserva')->on('reservations');

            $table->timestamps();
            //$table->timestamps();
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
