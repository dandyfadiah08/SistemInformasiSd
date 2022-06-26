<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class passiswa extends Model
{
    protected $table='passiswa';
    protected $fillable = [
       'NUPTK','mapel_id','soal_pas'
   ];
}
