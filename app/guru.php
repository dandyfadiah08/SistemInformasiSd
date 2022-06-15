<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    protected $table='guru';
    protected $fillable = [
       'NUPTK','nama_guru','jenis_kelamin','ttl','NIP','pendidikan_sebelumnya','status_kepegawaian','jenis_ptk'
   ];
}
