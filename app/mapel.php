<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
    protected $table='mapel';
    protected $fillable = [
       'NUPTK','id_kelas','mapel'
   ];
}
