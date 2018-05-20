<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Prendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prendas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigoBarras')->nullable();
            $table->integer('marca_id')->unsigned();
            $table->integer('tipo_id')->unsigned();
            $table->integer('estilo_id')->unsigned();
            $table->integer('temporada_id')->unsigned();
            $table->string('color');

           
            $table->foreign('tipo_id')->references('id')->on('tipo');
            $table->foreign('estilo_id')->references('id')->on('estilo');
            $table->foreign('temporada_id')->references('id')->on('temporada');
            $table->foreign('marca_id')->references('id')->on('marcas');


            $table->string('foto');
            $table->timestamps();
        });

        Schema::create('usuario_prenda', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('prenda_id')->unsigned();

            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('prenda_id')->references('id')->on('prendas');

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
        Schema::dropIfExists('prendas');
    }
}
