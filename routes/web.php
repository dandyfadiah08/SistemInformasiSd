<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){
	return view('main');
});
//====================//
//Kepala Sekolah(Admin)

Route::get('/admin','admin\LoginAdmin@adminlogin')->name('LOGINADMIN');
Route::post('/login-admin','admin\LoginAdmin@loginadmin')->name('login-admin');
Route::get('/dashboaradmin','admin\dashboaradmin@index')->name('IndexAdmin');
Route::get('/logincalon','pendaftar\LoginPendaftar@pendaftarlogin')->name('LOGINPENDAFTAR');
Route::get('/daftar','daftar\Pendaftar@pendaftarcalonsiswa')->name('DAFTARSISWA');
//kelas
Route::get('/datakelas','datakelas\data@kelas')->name('kelas');
Route::get('/tambahkelas','datakelas\data@create')->name('create.kelas');
Route::post('/storekelas','datakelas\data@Store')->name('tambah.kelas');
Route::get('edit/kelas/{id_kelas}','datakelas\data@Edit');
Route::get('delete/kelas/{id_kelas}','datakelas\data@Delete');
Route::post('update/kelas/{id_kelas}','datakelas\data@Update');
//Mata Pelajaran
Route::get('/datapelajaran','datapelajaran\data@pelajaran')->name('pelajaran');
Route::get('/tambahpelajaran','datapelajaran\data@create')->name('create.pelajaran');
Route::post('/storepelajaran','datapelajaran\data@Store')->name('tambah.pelajaran');
Route::get('edit/pelajaran/{id_pelajaran}','datapelajaran\data@Edit');
Route::get('delete/pelajaran/{id_pelajaran}','datapelajaran\data@Delete');
Route::post('update/pelajaran/{id_pelajaran}','datapelajaran\data@Update');
//Guru
Route::get('/dataguru','dataguru\data@guru')->name('guru');
Route::get('show/detail/guru/{NUPTK}','dataguru\data@detail_guru');
Route::get('/create/guru','dataguru\data@create')->name('create.guru');
Route::post('/storeguru','dataguru\data@Store')->name('tambah.guru');
Route::get('delete/guru/{NUPTK}','dataguru\data@Delete');
Route::get('edit/guru/{NUPTK}','dataguru\data@Edit');
Route::post('update/guru/{NUPTK}','dataguru\data@Update');
//siswa
Route::get('/datasiswa','datasiswa\data@siswa')->name('siswa');
Route::get('show/detail/siswa/{NIK}','datasiswa\data@detail_siswa');
Route::get('/create/siswa','datasiswa\data@create')->name('create.siswa');
Route::post('/storesiswa','datasiswa\data@Store')->name('tambah.siswa');
Route::get('delete/siswa/{NIK}','datasiswa\data@Delete');
Route::get('edit/siswa/{NIK}','datasiswa\data@Edit');
Route::post('update/siswa/{NIK}','datasiswa\data@Update');
//absenGuru
Route::get('/data-absen-guru','absenguruAdmin\data@absen')->name('absenGuru');
Route::get('record-absen-guru/{NUPTK}','absenguruAdmin\data@absenrecord');
//Logout
Route::get('/Logout','admin\LoginAdmin@adminlogout')->name('LOGOUT');

//============//
//Guru
Route::get('/guru','guru\LoginGuru@gurulogin')->name('LOGINGURU');
Route::post('/login-guru','guru\LoginGuru@loginguru')->name('login-guru');
Route::get('/dashboarguru','guru\dashboarguru@index')->name('IndexGuru');
//kelas-mapel
Route::get('/tambahmapel','datamapel\data@create')->name('create.mapel');
Route::post('/storemapel','datamapel\data@Store')->name('tambah.mapel');
Route::get('delete/mapel/{id_mapel}','datamapel\data@Delete');
//AbsenGuru
Route::get('/dataabsenguru','dataabsenguru\data@absenguru')->name('absenguru');
Route::get('/mulaiabsen','dataabsenguru\data@create')->name('mulai.absen');
Route::post('/storeketeranganabsen','dataabsenguru\data@Storeketeranganabsen')->name('tambah.keteranganabsen');
Route::post('/storeabsen','dataabsenguru\data@Storeabsen')->name('tambah.absen');
//Pembelajaran
//Materi dan Tugas
Route::get('/materidantugas','datamateridantugas\data@materi')->name('materi.tugas');
Route::post('/storemapeltugas','datamateridantugas\data@Store')->name('tambah.materi.tugas');
Route::get('delete/mapeltugas/{id}','datamateridantugas\data@Delete');
//uts
Route::get('/utssiswa','datautssiswa\data@uts')->name('uts.siswa');
Route::post('/storeutssiswa','datautssiswa\data@Store')->name('tambah.uts.siswa');
//pas
Route::get('/passiswa','datapassiswa\data@pas')->name('pas.siswa');
Route::post('/storepassiswa','datapassiswa\data@Store')->name('tambah.pas.siswa');