<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tipos extends Migration
{

    public function up()
    {
                    Schema::create('tipos', function (Blueprint $table) {
                    $table->increments('idtip');
                    $table->string('tipo',40);
                    $table->rememberToken();
                    $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('tipos');  
    }
}
