<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class municipios extends Model
{
   protected $primaryKey = 'idmun';  
   protected $fillable=['idmun','municipio','activo'];
}
