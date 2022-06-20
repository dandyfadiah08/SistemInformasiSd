<?php

namespace App\Http\Controllers\dataguru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\guru;
use App\kelas;
use DB;

class data extends Controller
{
    public function guru(){

        $guru = DB::table('guru')->get();

        return view('admin.guru.dataguru',compact('guru'));
    }
    public function create(){
        // $guru = guru::all();
    	// return view('admin.guru.insertguru',compact('guru'));
        return view('admin.guru.insertguru');
    }

    public function Store(Request $request){
        $guru= array();
        $guru['NUPTK']= $request->NUPTK;
        $guru['nama_guru']= $request->nama_guru;
        $guru['jenis_kelamin']= $request->jenis_kelamin;
        $guru['ttl']= $request->ttl;
        $guru['NIP']= $request->NIP;
        $guru['status_kepegawaian']= $request->status_kepegawaian;
        $guru['jenis_ptk']= $request->jenis_ptk;
        $guru['total_JJM']= $request->total_JJM;
        $tambah = DB::table('guru')->insert($guru);
        return redirect()->route('guru')
        ->with('success','Data Guru Telah Di Tambah');
    }  

    public function detail_guru($NUPTK){

    	$guru=guru::select('guru.NUPTK','guru.nama_guru','guru.jenis_kelamin','guru.ttl','guru.NIP','guru.status_kepegawaian','guru.jenis_ptk','guru.total_JJM')->where('guru.NUPTK',$NUPTK)->get();
       return view('admin.guru.detail_guru',compact('guru'));
    }
    public function Delete($NUPTK){
        $guru = DB::table('guru')->where('NUPTK',$NUPTK)->first();
        $hapusguru = DB::table('guru')->where('NUPTK',$NUPTK)->delete();
        return redirect()->route('guru')
                            ->with('success','Data Guru Deleted Succesfully');
    }
    public function Edit($NUPTK){
        $guru = DB::table('guru')->where('NUPTK',$NUPTK)->first();
        return view('admin.guru.editguru',compact('guru'));
    }
    public function Update(Request $request, $NUPTK){
        $data_guru = array();
        $data_guru['NUPTK'] = $request->NUPTK;
        $data_guru['nama_guru'] = $request->nama_guru;
        $data_guru['jenis_kelamin'] = $request->jenis_kelamin;
        $data_guru['ttl'] = $request->ttl;
        $data_guru['NIP'] = $request->NIP;
        $data_guru['status_kepegawaian'] = $request->status_kepegawaian;
        $data_guru['jenis_ptk'] = $request->jenis_ptk;
        $data_guru['total_JJM'] = $request->total_JJM;
        $validation = $request->validate([
            'NUPTK' => 'required',
            'nama_guru' => 'required',
            'jenis_kelamin' => 'required',
            'ttl' => 'required',
            'status_kepegawaian' => 'required',
            'jenis_ptk' => 'required',
            'total_JJM' => 'required'

        ]);
        $update_guru = DB::table('guru')->where('NUPTK',$NUPTK)->update($data_guru);
        return redirect()->route('guru')
                            ->with('success','Guru Update Succesfully');
    }
}