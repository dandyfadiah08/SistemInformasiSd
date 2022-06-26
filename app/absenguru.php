<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class absenguru extends Model
{
    protected $table='absenguru';
    protected $fillable = [
       'NUPTK','waktu'
   ];
}
