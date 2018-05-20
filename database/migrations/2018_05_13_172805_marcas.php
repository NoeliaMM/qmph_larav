<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Marcas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcas', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('marca', ['Adolfo Dominguez'
                                    ,'Amichi'
                                    ,'Benetton'
                                    ,'Bershka'
                                    ,'Bimba y Lola'
                                    ,'Carhartt'
                                    ,'Cortefiel'
                                    ,'COS'
                                    ,'CyA'
                                    ,'Desigual'
                                    ,'Disney'
                                    ,'El Corte Ingles'
                                    ,'Guess'
                                    ,'HyM'
                                    ,'Ikks'
                                    ,'Inside'
                                    ,'Kiabi'
                                    ,'La Redoute'
                                    ,'Lefties'
                                    ,'Levis'
                                    ,'Loogo'
                                    ,'Mango'
                                    ,'Massimo Dutti'
                                    ,'Mayoral'
                                    ,'Pedro del Hierro'
                                    ,'Pepe Jeans'
                                    ,'Pimkie'
                                    ,'Primark'
                                    ,'PullandBear'
                                    ,'Sfera'
                                    ,'Springfield'
                                    ,'Stradivarius'
                                    ,'Superdry'
                                    ,'Uniqlo'
                                    ,'Vans'
                                    ,'Venca'
                                    ,'Violeta'
                                    ,'Zara'
                                    ,'Zergatik'
                                    ,'Otras']);
            $table->enum('fotomarca',['AdolfoDominguez.png'
                                    ,'Amichi.png'
                                    ,'Benetton.png'
                                    ,'Bershka.png'
                                    ,'BimbayLola.png'
                                    ,'Carhartt.png'
                                    ,'Cortefiel.png'
                                    ,'Cos.png'
                                    ,'CyA.png'
                                    ,'Desigual.png'
                                    ,'Disney.png'
                                    ,'ElCorteIngles.png'
                                    ,'Guess.png'
                                    ,'HyM.png'
                                    ,'Ikks.png'
                                    ,'Inside.png'
                                    ,'Kiabi.png'
                                    ,'LaRedoute.png'
                                    ,'Lefties.png'
                                    ,'Levis.png'
                                    ,'Loogo.png'
                                    ,'Mango.png'
                                    ,'MassimoDutti.png'
                                    ,'Mayoral.png'
                                    ,'PedroDelHierro.png'
                                    ,'PepeJeans.png'
                                    ,'Pimkie.png'
                                    ,'Primark.png'
                                    ,'PullandBear.png'
                                    ,'Sfera.png'
                                    ,'Springfield.png'
                                    ,'Stradivarius.png'
                                    ,'Superdry.png'
                                    ,'Uniqlo.png'
                                    ,'Vans.png'
                                    ,'Venca.png'
                                    ,'Violeta.png'
                                    ,'Zara.png'
                                    ,'Zergatik.png'
                                    ,NULL]);
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
        Schema::dropIfExists('marcas');
    }
}
