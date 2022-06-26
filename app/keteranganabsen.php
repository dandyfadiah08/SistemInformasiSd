<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class keteranganabsen extends Model
{
    protected $table='keteranganabsen';
    protected $fillable = [
       'NUPTK','waktu','keterangan'
   ];
}
