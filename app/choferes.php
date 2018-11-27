<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class choferes extends Model
{
   use SoftDeletes;
   protected $primaryKey = 'idcho';  
   protected $fillable=['idcho','nombre','ap_emp','am_emp','direccion','idmun'
   						,'telefono','cp','licencia','archivo'];
   protected $date=['deleted_at'];
}
