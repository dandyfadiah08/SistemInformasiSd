<?php

namespace App\Http\Controllers\datamapel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\pelajaran;
use App\kelas;
use App\guru;
use App\mapel;
use App\progressLogin;
use DB;


class data extends Controller
{
    public function create(){
        $kelas = kelas::all();
        $pelajaran = pelajaran::all();
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
        $mapel = mapel::select('mapel.id','kelas.jenis_kelas','pelajaran.mata_pelajaran')->join('kelas','kelas.id','=','mapel.id_kelas')->join('pelajaran','pelajaran.id','=','mapel.mapel')->where('mapel.NUPTK',$tampID['NUPTK'])->get();
    	 return view('guru.kelas-mapel.insertmapel',['kelas'=>$kelas,'mapel'=>$mapel,'pelajaran'=>$pelajaran]);
    }
    public function Store(Request $request){
        $tampID = array();
        $tampall = array();
        $tampNUPTK = array();
        $NUPTK = progressLogin::get();
        $guru = guru::get();
        foreach ($NUPTK as $id) {
            $tampNUPTK['NUPTK'] = $id->NUPTK;
        }
        foreach ($guru as $g) {
            if ($g->NUPTK == $tampNUPTK['NUPTK']) {
                $tampID['NUPTK'] = $g->id;
            }
        }
        
        $tampID['mapel'] = $request ->mapel;
        if ($tampID['mapel'] == Null) {
            return redirect()->route('create.mapel')
            ->with('success','Mapel data is empty and failed to be saved',200);
        }else{
           $coba = $tampID['mapel'];
        $length = count($coba);
        for ($i=0; $i < $length; $i++) { 
            // $tampall[$i]=[$tampID['NUPTK'],$coba[$i]];
            $tampall['NUPTK'] = $tampID['NUPTK'];
            $tampall['id_kelas'] = $request->id_kelas;
            $tampall['mapel'] = $coba[$i];
            mapel::create($tampall);
        }
    	return redirect()->route('create.mapel')
    						->with('success','mapel Created Succesfully',200);

        }
        
    }   
    public function Delete($id_mapel){
        $mapel = DB::table('mapel')->where('id',$id_mapel)->first();
        $hapusmapel = DB::table('mapel')->where('id',$id_mapel)->delete();
        return redirect()->route('create.mapel')
                            ->with('success','Data Mapel Deleted Succesfully');
    }
}
