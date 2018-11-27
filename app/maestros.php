<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maestros extends Model
{
   
   protected $primaryKey = 'idm';  
   protected $fillable=['idm','nombre','edad','correo','cp',
                       'sexo','beca','activo','idc','archivo'];

}
