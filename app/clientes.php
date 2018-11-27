<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class clientes extends Model
{
   use SoftDeletes;
   protected $primaryKey = 'idc';  
   protected $fillable=['idc','nombre','ap_cli','am_cli','edad','direccion','idmun',
   						'cp','telefono','correo','archivo'];
   protected $date=['deleted_at'];
}
