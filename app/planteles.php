<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class planteles extends Model
{ 
    protected $primaryKey = 'idpl';
    protected $fillable=['idpl','nombre','calle'];
}
