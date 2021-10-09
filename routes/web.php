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
Route::get('/admin','admin\LoginAdmin@adminlogin')->name('LOGINADMIN');
Route::get('/dashboaradmin','admin\dashboaradmin@index')->name('IndexAdmin');
Route::get('/logincalon','pendaftar\LoginPendaftar@pendaftarlogin')->name('LOGINPENDAFTAR');
Route::get('/datakelas','datakelas\data@kelas')->name('kelas');
Route::get('/daftar','daftar\Pendaftar@pendaftarcalonsiswa')->name('DAFTARSISWA');
Route::get('/tambahkelas','datakelas\data@create')->name('create.kelas');
Route::post('/storekelas','datakelas\data@Store')->name('tambah.kelas');
Route::get('edit/kelas/{id_kelas}','datakelas\data@Edit');
Route::get('delete/kelas/{id_kelas}','datakelas\data@Delete');
Route::post('update/kelas/{id_kelas}','datakelas\data@Update');
Route::get('/datasiswa','datasiswa\data@siswa')->name('siswa');
Route::get('show/detail/{NIK}','datasiswa\data@detail_siswa');
Route::get('/create/siswa','datasiswa\data@create')->name('create.siswa');
Route::post('/storesiswa','datasiswa\data@Store')->name('tambah.siswa');