<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tipos extends Model
{
   use SoftDeletes;
   protected $primaryKey = 'idtip';  
   protected $fillable=['idtip','tipo','activo'];
   protected $date=['deleted_at'];

}
