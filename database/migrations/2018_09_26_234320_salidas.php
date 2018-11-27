<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Salidas extends Migration
{
    public function up()
    {
                    Schema::create('salidas', function (Blueprint $table) {
                    $table->increments('idsal');
                    $table->integer('idem')->unsigned();
                    $table->integer('idcho')->unsigned();
                    $table->string('fecha',20);
                    $table->string('destino',100);
                    $table->string('valesalida',20);
                    $table->foreign('idem')->references('idem')->on('empleados');
                    $table->foreign('idcho')->references('idcho')->on('choferes');
                    $table->rememberToken();
                    $table->timestamps();

        });
    }       

    public function down()
    {
     Schema::drop('salidas');  
    }
}
