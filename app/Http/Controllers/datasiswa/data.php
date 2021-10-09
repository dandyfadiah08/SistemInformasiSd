<?php

namespace App\Http\Controllers\datasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\siswa;
use App\kelas;
use DB;

class data extends Controller
{
    public function siswa(){

     	//$siswa = DB::table('siswa')->get();
    	$siswa=siswa::select('kelas.jenis_kelas','siswa.NIK','siswa.nis','siswa.nama_siswa','siswa.ttl','siswa.jenis_kelamin','siswa.agama','siswa.pendidikan_sebelumnya','siswa.nama_ayah','siswa.nama_ibu','siswa.pekerjaan_ayah','siswa.pekerjaan_ibu','siswa.alamat_ayah','siswa.alamat_ibu','siswa.nama_wali','siswa.pekerjaan_wali','siswa.alamat_wali','siswa.foto_siswa','siswa.alamat_siswa')->join('kelas','kelas.id_kelas','=','siswa.id_kelas')->get();
       return view('admin.siswa.datasiswa',compact('siswa'));
    }
    public function create(){
        $kelas = kelas::all();
    	return view('admin.siswa.insertsiswa',compact('kelas'));
    }
    public function Store(Request $request){
        $siswa= array();
        $siswa['NIK']= $request->NIK;
        $siswa['id_kelas']= $request->id_kelas;
        $siswa['nis']= $request->nis;
        $siswa['nama_siswa']= $request->nama_siswa;
        $siswa['ttl']= $request->ttl;
        $siswa['jenis_kelamin']= $request->jenis_kelamin;
        $siswa['agama']= $request->agama;
        $siswa['pendidikan_sebelumnya']= $request->pendidikan_sebelumnya;
        $siswa['nama_ayah']= $request->nama_ayah;
        $siswa['nama_ibu']= $request->nama_ibu;
        $siswa['pekerjaan_ayah']= $request->pekerjaan_ayah;
        $siswa['pekerjaan_ibu']= $request->pekerjaan_ibu;
        $siswa['alamat_ayah']= $request->alamat_ayah;
        $siswa['alamat_ibu']= $request->alamat_ibu;
        $siswa['nama_wali']= $request->nama_wali;
        $siswa['pekerjaan_wali']= $request->pekerjaan_wali;
        $siswa['alamat_wali']= $request->alamat_wali;
        $siswa['alamat_siswa']= $request->alamat_siswa;

        $image = $request->file('foto_siswa');
        if ($image) {
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/media';  
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);  
            $siswa['foto_siswa']= $image_url;
            $tambah = DB::table('siswa')->insert($siswa);
            return redirect()->route('siswa')
                            ->with('success','Data Siswa Telah Di Tambah');

        }


    }
    public function detail_siswa($NIK){

     	//$siswa = DB::table('siswa')->get();
    	$siswa=siswa::select('kelas.jenis_kelas','siswa.NIK','siswa.nis','siswa.nama_siswa','siswa.ttl','siswa.jenis_kelamin','siswa.agama','siswa.pendidikan_sebelumnya','siswa.nama_ayah','siswa.nama_ibu','siswa.pekerjaan_ayah','siswa.pekerjaan_ibu','siswa.alamat_ayah','siswa.alamat_ibu','siswa.nama_wali','siswa.pekerjaan_wali','siswa.alamat_wali','siswa.foto_siswa','siswa.alamat_siswa')->join('kelas','kelas.id_kelas','=','siswa.id_kelas')->where('siswa.NIK',$NIK)->get();
       return view('admin.siswa.detail_siswa',compact('siswa'));
    }
}
