<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ventadetalles extends Model
{
      protected $primaryKey = 'idvd';  
   protected $fillable=['idvd','idv','cantidad','costo','idp'];
}
