<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Entradas extends Migration
{

    public function up()
    {
                    Schema::create('entradas', function (Blueprint $table) {
                    $table->increments('ident');
                    $table->integer('idc')->unsigned();
                    $table->integer('idem')->unsigned();
                    $table->date('fecha',20);
                    $table->foreign('idc')->references('idc')->on('clientess');
                    $table->foreign('idem')->references('idem')->on('empleados');
                    $table->rememberToken();
                    $table->timestamps();

        });
    }

    public function down()
    {
     Schema::drop('entradas');
    }
}
