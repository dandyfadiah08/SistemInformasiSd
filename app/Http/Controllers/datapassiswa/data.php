<?php

namespace App\Http\Controllers\datapassiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\guru;
use App\kelas;
use App\mapel;
use App\pelajaran;
use App\progressLogin;
use App\mapeltugas;
use App\passiswa;
use DB;
class data extends Controller
{
    public function pas(){
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
      $passiswa = passiswa::get()->where('NUPTK',$tampID['NUPTK']);
      $mapel = mapel::select('mapel.id','kelas.jenis_kelas','pelajaran.mata_pelajaran')->join('kelas','kelas.id','=','mapel.id_kelas')->join('pelajaran','pelajaran.id','=','mapel.mapel')->where('mapel.NUPTK',$tampID['NUPTK'])->get();
        return view('guru.PAS.datapas',['mapel'=>$mapel,'passiswa'=>$passiswa]);
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
          $passiswa = array();
          $passiswa['mapel_id'] = $request->mapel_id;
          $passiswa['NUPTK'] = $tampID['NUPTK'];
          $passiswa['keterangan_tambahan'] = $request->keterangan_tambahan;
          
          $soal_pas = $request->file('soal_pas');
          if ($soal_pas) {
              $soal_pas_name = date('dmy_H_s_i');
              $ext = strtolower($soal_pas->getClientOriginalExtension());
              $soal_pas_full_name = $soal_pas_name.'.'.$ext;
              $upload_path = 'media/';  
              $soal_pas_url = $upload_path.$soal_pas_full_name;
              $success = $soal_pas->move($upload_path,$soal_pas_full_name);  
              $passiswa['soal_pas']= $soal_pas_url;
  
          }
        $tambah_passiswa = DB::table('passiswa')->insert($passiswa);
        return back()->with('fail','Data Pas Siswa Successfully');
          
  
     }
}
