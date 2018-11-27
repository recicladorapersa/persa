<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class usuarios extends Model
{
     use SoftDeletes;
   protected $primaryKey = 'idu';
   
   protected $fillable=['idu','nombre','apellido','user',
                        'pasw','tipo','correo','imagen','activo'];
   protected $date=['deleted_at'];
}
