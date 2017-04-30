<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('ci_person');
            $table->string('name');
            $table->string('lastname');
            $table->string('phone');
            $table->string('address');
            $table->string('e_mail')->unique();
            $table->integer('id_rol')->nullable()->unsigned();
            $table->foreign('id_rol')->references('id_rol')->on('roles');
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
        Schema::dropIfExists('people');
    }
}
