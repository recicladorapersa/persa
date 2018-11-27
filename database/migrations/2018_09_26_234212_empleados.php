<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Empleados extends Migration
{
    public function up()
    {
                    Schema::create('empleados', function (Blueprint $table) {
                    $table->increments('idem');
                    $table->integer('idtur')->unsigned();
                    $table->integer('idarea')->unsigned();
                    $table->integer('idmun')->unsigned();
                    $table->string('nombre',40);
                    $table->string('ap_emp',40);
                    $table->string('am_emp',40);
                    $table->string('direccion',100);
                    $table->string('telefono',20);
                    $table->string('cp',5);
                    $table->string('contraseña',20);
                    $table->string('activo',2);
                    $table->string('correo',100);
                    $table->foreign('idtur')->references('idtur')->on('turnos');
                    $table->foreign('idarea')->references('idarea')->on('areas');
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
