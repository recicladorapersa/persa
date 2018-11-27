<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    protected $primaryKey = 'idc';
   
   protected $fillable=['idc','nombre'];
   
}
