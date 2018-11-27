<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Productos extends Migration
{

    public function up()
    {
            Schema::create('productos', function (Blueprint $table) {
                    $table->increments('idpro');
                    $table->integer('idtip')->unsigned();;
                    $table->float('costo',40);
                    $table->string('unidad',40);
                    $table->foreign('idtip')->references('idtip')->on('tipos');
                    $table->rememberToken();
                    $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('productos');
    }
}
