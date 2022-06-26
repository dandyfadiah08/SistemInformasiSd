<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mapeltugas extends Model
{
    protected $table='mapeltugas';
    protected $fillable = [
       'keterangan_mapel','NUPTK','mapel_id','waktu_mulai_absen_siswa','waktu_akhir_absen_siswa','gambar_materi','video_materi','keterangan_materi','gambar_tugas','video_tugas','keterangan_tugas'
   ];
}
