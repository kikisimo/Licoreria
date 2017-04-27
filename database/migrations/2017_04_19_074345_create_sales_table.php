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
            $table->integer('id_usuario')->nullable()->unsigned();
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');

            $table->integer('ci_cliente')->nullable()->unsigned();
            $table->foreign('ci_cliente')->references('ci_cliente')->on('clients');

            $table->integer('cod_reserva')->nullable()->unsigned();
            $table->foreign('cod_reserva')->references('cod_reserva')->on('reservations');

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
