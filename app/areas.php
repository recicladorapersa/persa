<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class areas extends Model
{
   use SoftDeletes;
   protected $primaryKey = 'idarea';  
   protected $fillable=['idarea','nombre_area','activo'];
   protected $date=['deleted_at'];
}
