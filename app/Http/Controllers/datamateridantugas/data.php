<?php

namespace App\Http\Controllers\datamateridantugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\guru;
use App\kelas;
use App\mapel;
use App\pelajaran;
use App\progressLogin;
use App\mapeltugas;
use DB;

class data extends Controller
{
    public function materi(){
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
        $mapeldantugas = mapeltugas::get()->where('NUPTK',$tampID['NUPTK']);
        $mapel = mapel::select('mapel.id','kelas.jenis_kelas','pelajaran.mata_pelajaran')->join('kelas','kelas.id','=','mapel.id_kelas')->join('pelajaran','pelajaran.id','=','mapel.mapel')->where('mapel.NUPTK',$tampID['NUPTK'])->get();
      return view('guru.materi-dan-tugas.datamateri',['mapel'=>$mapel,'mapeldantugas'=>$mapeldantugas]);
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
        $mapeltugas = array();
        $mapeltugas['keterangan_mapel'] = $request->keterangan_mapel;
        $mapeltugas['mapel_id'] = $request->mapel_id;
        $mapeltugas['NUPTK'] = $tampID['NUPTK'];
        $mapeltugas['waktu_mulai_absen_siswa'] = $request->waktu_mulai_absen_siswa;
        $mapeltugas['waktu_akhir_absen_siswa'] = $request->waktu_akhir_absen_siswa;
        $mapeltugas['keterangan_materi'] = $request->keterangan_materi;
        $mapeltugas['keterangan_tugas'] = $request->keterangan_tugas;
        
        $image_materi = $request->file('gambar_materi');
        if ($image_materi) {
            $image_materi_name = date('dmy_H_s_i');
            $ext = strtolower($image_materi->getClientOriginalExtension());
            $image_materi_full_name = $image_materi_name.'.'.$ext;
            $upload_path = 'media/';  
            $image_materi_url = $upload_path.$image_materi_full_name;
            $success = $image_materi->move($upload_path,$image_materi_full_name);  
            $mapeltugas['gambar_materi']= $image_materi_url;

        }
        $video_materi = $request->file('video_materi');
        if ($video_materi) {
            $video_materi_name = date('dmy_H_s_i');
            $ext = strtolower($video_materi->getClientOriginalExtension());
            $video_materi_full_name = $video_materi_name.'.'.$ext;
            $upload_path = 'media/';  
            $video_materi_url = $upload_path.$video_materi_full_name;
            $success = $video_materi->move($upload_path,$video_materi_full_name);  
            $mapeltugas['video_materi']= $video_materi_url;

        }
        $image_tugas = $request->file('gambar_tugas');
        if ($image_tugas) {
            $image_tugas_name = date('dmy_H_s_i');
            $ext = strtolower($image_tugas->getClientOriginalExtension());
            $image_tugas_full_name = $image_tugas_name.'.'.$ext;
            $upload_path = 'media/';  
            $image_tugas_url = $upload_path.$image_tugas_full_name;
            $success = $image_tugas->move($upload_path,$image_tugas_full_name);  
            $mapeltugas['gambar_tugas']= $image_tugas_url;

        }
        $video_tugas = $request->file('video_tugas');
        if ($video_tugas) {
            $video_tugas_name = date('dmy_H_s_i');
            $ext = strtolower($video_tugas->getClientOriginalExtension());
            $video_tugas_full_name = $video_tugas_name.'.'.$ext;
            $upload_path = 'media/';  
            $video_tugas_url = $upload_path.$video_tugas_full_name;
            $success = $video_tugas->move($upload_path,$video_tugas_full_name);  
            $mapeltugas['video_tugas']= $video_tugas_url;

        }
      $tambah_mapeltugas = DB::table('mapeltugas')->insert($mapeltugas);
      return back()->with('fail','Data Materi dan Tugas Successfully');
        

   }
   public function Delete($id){
    $mapeltugas = DB::table('mapeltugas')->where('id',$id)->first();
    $hapusmapeltugas = DB::table('mapeltugas')->where('id',$id)->delete();
    return redirect()->route('materi.tugas')
                        ->with('success','Mapel dan Tugas Deleted Succesfully');
}
}
