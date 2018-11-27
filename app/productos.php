<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class productos extends Model
{
   use SoftDeletes;
   protected $primaryKey = 'idpro';
   protected $fillable=['idpro','idtip','costo','unidad'];
   protected $date=['deleted_at'];
   
   
}
