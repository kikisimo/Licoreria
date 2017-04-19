<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_issues', function (Blueprint $table) {
            $table->increments('cod_EFV');
            $table->date('fecha_emision');
            $table->integer('cod_facturaV')->unsigned();
            $table->foreign('cod_facturaV')->references('cod_facturaV')->on('bill_sales');
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
        Schema::dropIfExists('bill_issues');
    }
}
