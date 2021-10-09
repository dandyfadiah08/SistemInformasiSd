<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
	protected $table='siswa';
     protected $fillable = [
        'NIK','id_kelas','nis','nama_siswa','ttl','jenis_kelamin','agama','pendidikan_sebelumnya','nama_ayah','nama_ibu','pekerjaan_ayah','pekerjaan_ibu','alamat_ayah','alamat_ibu','nama_wali','pekerjaan_wali','alamat_wali','foto_siswa','alamat_siswa',
    ];
}
