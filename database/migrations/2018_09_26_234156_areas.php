<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Areas extends Migration
{

    public function up()
    {
                    Schema::create('areas', function (Blueprint $table) {
                    $table->increments('idarea');
                    $table->string('nombre_area',40);   
                    $table->rememberToken();
                    $table->timestamps();
        });

    }

    public function down()
    {
        Schema::drop('areas');
    }
}
