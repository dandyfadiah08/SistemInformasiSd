<?php

namespace App\Http\Controllers\datautssiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\guru;
use App\kelas;
use App\mapel;
use App\pelajaran;
use App\progressLogin;
use App\mapeltugas;
use App\utssiswa;
use DB;

class data extends Controller
{
    public function uts(){
      $datapelajaran = pelajaran::all();
      $kelas = kelas::all();
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
      $utssiswa = utssiswa::get()->where('NUPTK',$tampID['NUPTK']);
      $mapel = mapel::select('mapel.id','kelas.jenis_kelas','pelajaran.mata_pelajaran')->join('kelas','kelas.id','=','mapel.id_kelas')->join('pelajaran','pelajaran.id','=','mapel.mapel')->where('mapel.NUPTK',$tampID['NUPTK'])->get();
       return view('guru.UTS.datauts',['mapel'=>$mapel,'utssiswa'=>$utssiswa]);
   }
   public function Store(Request $request){
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
        $utssiswa = array();
        $utssiswa['mapel_id'] = $request->mapel_id;
        $utssiswa['NUPTK'] = $tampID['NUPTK'];
        $utssiswa['keterangan_tambahan'] = $request->keterangan_tambahan;
        
        $soal_uts = $request->file('soal_uts');
        if ($soal_uts) {
            $soal_uts_name = date('dmy_H_s_i');
            $ext = strtolower($soal_uts->getClientOriginalExtension());
            $soal_uts_full_name = $soal_uts_name.'.'.$ext;
            $upload_path = 'media/';  
            $soal_uts_url = $upload_path.$soal_uts_full_name;
            $success = $soal_uts->move($upload_path,$soal_uts_full_name);  
            $utssiswa['soal_uts']= $soal_uts_url;

        }
      $tambah_utssiswa = DB::table('utssiswa')->insert($utssiswa);
      return back()->with('fail','Data Uts Siswa Successfully');
        

   }
}
