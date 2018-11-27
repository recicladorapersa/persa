<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Turnos extends Migration
{

    public function up()
    {
                    Schema::create('turnos', function (Blueprint $table) {
                    $table->increments('idtur');
                    $table->string('turno',40);
                    $table->rememberToken();
                    $table->timestamps();
        });

    }

    public function down()
    {
                Schema::drop('turnos');
    }
}
