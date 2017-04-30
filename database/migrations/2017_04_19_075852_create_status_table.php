<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //Verifica que los productos se hayan vencido o no, y la cantidad minima, con true y false
    protected $table = 'status';
    public function up()
    {
        Schema::create('status', function (Blueprint $table) {
            $table->increments('cod_status');
            $table->boolean('status_quantity');
            $table->boolean('status_expiration');
            $table->integer('cod_warehouse')->nullable()->unsigned();
            $table->foreign('cod_warehouse')->references('cod_warehouse')->on('warehouses');

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
        Schema::dropIfExists('status');
    }
}
