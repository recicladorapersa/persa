<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class turnos extends Model
{
   use SoftDeletes;
   protected $primaryKey = 'idtur';  
   protected $fillable=['idtur','turno','activo'];
   protected $date=['deleted_at'];
   

}