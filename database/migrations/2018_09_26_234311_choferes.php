<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Choferes extends Migration
{
    public function up()
    {
                    Schema::create('choferes', function (Blueprint $table) {
                    $table->increments('idcho');
                    $table->integer('idmun')->unsigned();;
                    $table->string('nombre',40);
                    $table->string('ap_emp',40);
                    $table->string('am_emp',40);
                    $table->string('direccion',100);
                    $table->string('telefono',20);
                    $table->string('cp',5);
                    $table->string('ruta',40);
                    $table->string('licencia',40);
                    $table->foreign('idmun')->references('idmun')->on('municipios');
                    $table->rememberToken();
                    $table->timestamps();
        });
    }

   public function down()
    {
     Schema::drop('choferes');

    }
}
