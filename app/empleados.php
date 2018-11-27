<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class empleados extends Model
{
   use SoftDeletes;
   protected $primaryKey = 'idem';  
   protected $fillable=['idem','idtur','idarea','nombre','ap_cli','am_cli','edad','direccion','idmun',
   						'cp','telefono','contraseña','activo','correo','archivo'];
   protected $date=['deleted_at'];
}
