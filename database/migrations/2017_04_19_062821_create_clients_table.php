<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    protected $primaryKey = 'ci_cliente';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        protected $primaryKey = 'ci_cliente';
        Schema::create('clients', function (Blueprint $table) {

            $table->increments('ci_cliente');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('nit');
            $table->float('telefono');
            $table->string('correo');
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
        Schema::dropIfExists('clients');
    }
}
