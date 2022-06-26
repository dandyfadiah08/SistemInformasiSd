<?php

namespace App\Http\Controllers\absenguruAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\guru;
use App\keteranganabsen;
use App\absenguru;
use DB;

class data extends Controller
{
    public function absen(){
        $guru = guru::all();
    	return view('Admin.absenguru.dataabsenguru',['guru'=>$guru]);
    }
    public function absenrecord($NUPTK){
        $guru = DB::table('guru')->where('NUPTK',$NUPTK)->first();
        $ketabsen=keteranganabsen::select('keteranganabsen.NUPTK','keteranganabsen.waktu','keteranganabsen.keterangan')->where('keteranganabsen.NUPTK', $guru->id)->orderBy("waktu", "asc")->get();
        $coba=keteranganabsen::select();
        $jumlahsakit = 0;
        $jumlahizin = 0;
        $jumlahcuti = 0;
        foreach ($ketabsen as $ketab ) {

            if ($ketab->keterangan == 's') {
                $jumlahsakit = $jumlahsakit + 1;
            }
            if ($ketab->keterangan == 'c') {
                $jumlahcuti = $jumlahcuti + 1;
            }
            if ($ketab->keterangan == 'i') {
                $jumlahizin = $jumlahizin +1;
            }
        }
    	 //return view('Admin.absenguru.recordabsen',['guru'=>$guru,'jumlahsakit'=>$jumlahsakit,'jumlahcuti'=>$jumlahcuti,'jumlahizin'=>$jumlahizin]);
    } 
}
