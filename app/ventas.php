<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
   protected $primaryKey = 'idv';  
   protected $fillable=['idv','idc','fecha'];
}
