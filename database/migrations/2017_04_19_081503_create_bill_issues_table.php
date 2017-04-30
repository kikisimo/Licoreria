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
            $table->increments('cod_bi');
            $table->date('issue_date');
            $table->integer('cod_bill')->nullable()->unsigned();
            $table->foreign('cod_bill')->references('cod_bill')->on('bill_sales');
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
        Schema::dropIfExists('bill_issues');
    }
}
