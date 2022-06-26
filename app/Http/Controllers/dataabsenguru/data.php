<?php

namespace App\Http\Controllers\dataabsenguru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\guru;
use App\progressLogin;
use App\keteranganabsen;
use App\absenguru;
use DB;
class data extends Controller
{
    public function absenguru(){

       // $guru = DB::table('guru')->get();
        $NUPTK = progressLogin::get();
        $guru = guru::get();
        foreach ($NUPTK as $id) {
            $tampid['NUPTK'] = $id->NUPTK;
        }
        foreach ($guru as $g) {
            if ($g->NUPTK == $tampid['NUPTK']) {
                $tampID['NUPTK'] = $g->id;
            }
        }
        $keteranganabsen=keteranganabsen::select('keteranganabsen.NUPTK','keteranganabsen.waktu','keteranganabsen.keterangan')->where('keteranganabsen.NUPTK', $tampID['NUPTK'])->orderBy("waktu", "asc")->get();
        $absenguru=absenguru::select('absenguru.NUPTK','absenguru.waktu')->where('absenguru.NUPTK', $tampID['NUPTK'])->orderBy("waktu", "asc")->get();
         return view('guru.absen-kelas.dataabsen',['keteranganabsen'=>$keteranganabsen,'absenguru'=>$absenguru]);
    }
    public function create(){
        // $guru = guru::all();
    	// return view('admin.guru.insertguru',compact('guru'));
        return view('guru.absen-kelas.insertabsen');
    }
    public function Storeabsen(Request $request){
        $absenguru = array();
        $NUPTK = progressLogin::get();
        $guru = guru::get();
        foreach ($NUPTK as $id) {
            $tampid['NUPTK'] = $id->NUPTK;
        }
        foreach ($guru as $g) {
            if ($g->NUPTK == $tampid['NUPTK']) {
                $absenguru['NUPTK'] = $g->id;
            }
        }
        $absenguru['waktu']= $request->waktuabsen;
        if ($absenguru['waktu'] == null) {
            return back()->with('fail','Waktu Absen is Empty');
        }else{
            absenguru::create($absenguru);
            return back()->with('fail','Absen Successfully');
        }


    }  
    public function Storeketeranganabsen(Request $request){
        $ketabsen = array();
        $tampwaktu = array();
        $tampwaktu['waktu'] = $request->waktu;
        $NUPTK = progressLogin::get();
        $guru = guru::get();
        foreach ($NUPTK as $id) {
            $tampid['NUPTK'] = $id->NUPTK;
        }
        foreach ($guru as $g) {
            if ($g->NUPTK == $tampid['NUPTK']) {
                $ketabsen['NUPTK'] = $g->id;
            }
        }
        $ketabsen['waktu']=$tampwaktu['waktu'];
        $ketabsen['keterangan'] = $request->keterangan;
        if ($ketabsen['waktu'] == null) {
            return back()->with('fail','Waktu is Empty');
        }else{
            keteranganabsen::create($ketabsen);
            return back()->with('fail','Keterangan Absen Successfully');
        }

        
    }  
    
}
