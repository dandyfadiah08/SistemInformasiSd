<?php

namespace App\Http\Controllers\datakelas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\kelas;
use DB;

class data extends Controller
{
     public function kelas(){

     	$kelas = DB::table('kelas')->get();

       return view('admin.kelas.datakelas',compact('kelas'));
    }
    public function create(){
    	return view('admin.kelas.tambahkelas');
    }
     public function Store(Request $request){
    	$data_kelas = array();
    	$data_kelas['jenis_kelas'] = $request->jenis_kelas;
    	$validation = $request->validate([
    		'jenis_kelas' => 'required'

    	]);
    	$tambah_kelas = DB::table('kelas')->insert($data_kelas);
    	return redirect()->route('kelas')
    						->with('success','Kelas Created Succesfully');
    }   
    public function Edit($id_kelas){
        $kelas = DB::table('kelas')->where('id_kelas',$id_kelas)->first();
        return view('admin.kelas.editkelas',compact('kelas'));
    }
    public function Update(Request $request, $id_kelas){
        $data_kelas = array();
        $data_kelas['jenis_kelas'] = $request->jenis_kelas;
        $validation = $request->validate([
            'jenis_kelas' => 'required'

        ]);
        $tambah_kelas = DB::table('kelas')->where('id_kelas',$id_kelas)->update($data_kelas);
        return redirect()->route('kelas')
                            ->with('success','Kelas Update Succesfully');
    }
        public function Delete($id_kelas){
        $kelas = DB::table('kelas')->where('id_kelas',$id_kelas)->first();
        $hapuskelas = DB::table('kelas')->where('id_kelas',$id_kelas)->delete();
        return redirect()->route('kelas')
                            ->with('success','Kelas Deleted Succesfully');
    }
}
