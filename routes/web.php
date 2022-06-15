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
Route::get('show/detail/{NUPTK}','dataguru\data@detail_guru');
Route::get('/create/guru','dataguru\data@create')->name('create.guru');
Route::post('/storeguru','dataguru\data@Store')->name('tambah.guru');
Route::get('delete/guru/{NUPTK}','dataguru\data@Delete');
Route::get('edit/guru/{NUPTK}','dataguru\data@Edit');
Route::post('update/guru/{NUPTK}','dataguru\data@Update');
//siswa
Route::get('/datasiswa','datasiswa\data@siswa')->name('siswa');
Route::get('show/detail/{NIK}','datasiswa\data@detail_siswa');
Route::get('/create/siswa','datasiswa\data@create')->name('create.siswa');
Route::post('/storesiswa','datasiswa\data@Store')->name('tambah.siswa');
Route::get('delete/siswa/{NIK}','datasiswa\data@Delete');
Route::get('edit/siswa/{NIK}','datasiswa\data@Edit');
Route::post('update/siswa/{NIK}','datasiswa\data@Update');