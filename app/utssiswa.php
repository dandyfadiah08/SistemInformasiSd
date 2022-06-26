<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class utssiswa extends Model
{
    protected $table='utssiswa';
    protected $fillable = [
       'NUPTK','mapel_id','soal_uts'
   ];
}
