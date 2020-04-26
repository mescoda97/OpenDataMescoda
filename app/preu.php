<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class preu extends Model
{
     protected $table = 'preu';

     protected $hidden = ['created_at','updated_at'];
}