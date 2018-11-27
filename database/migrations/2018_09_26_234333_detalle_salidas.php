<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleSalidas extends Migration
{

    public function up()
    {
                    Schema::create('detalle_salidas', function (Blueprint $table) {
                    $table->integer('iddetsal');
                    $table->integer('idpro')->unsigned();
                    $table->integer('idsal')->unsigned();
                    $table->string('cantidad',20);
                    $table->float('costo',20);
                    $table->foreign('idpro')->references('idpro')->on('productos');
                    $table->foreign('idsal')->references('idsal')->on('salidas');
                    $table->rememberToken();
                    $table->timestamps();

        }); 
    }

    public function down()
    {
     Schema::drop('detalle_salidas');        
    }
}
