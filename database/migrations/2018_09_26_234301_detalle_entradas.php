<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleEntradas extends Migration
{

    public function up()
    {
                    Schema::create('detalle_entradas', function (Blueprint $table) {
                    $table->integer('idde');
                    $table->integer('idpro')->unsigned();
                    $table->integer('ident')->unsigned();
                    $table->string('cantidad',20);
                    $table->float('costo',20);
                    $table->foreign('idpro')->references('idpro')->on('productos');
                    $table->foreign('ident')->references('ident')->on('entradas');
                    $table->rememberToken();
                    $table->timestamps();

        });
    }

    public function down()
    {
     Schema::drop('detalle_entradas');
    }
}
