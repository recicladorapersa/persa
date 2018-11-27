<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientess extends Migration
{
    public function up()
    {
        Schema::create('clientess', function (Blueprint $table) {
                    $table->increments('idc');
                    $table->integer('idmun')->unsigned();
                    $table->string('nombre',40);
                    $table->string('ap_cli',40);
                    $table->string('am_cli',40);
                    $table->string('edad',40);
                    $table->string('direccion',40);
                    $table->string('telefono',20);
                    $table->string('cp',5);
                    $table->string('correo',100);
                    $table->foreign('idmun')->references('idmun')->on('municipios');
                    $table->rememberToken();
                    $table->timestamps();
  });
    }

    public function down()
    {
                Schema::drop('empleados');
        
    }
}
