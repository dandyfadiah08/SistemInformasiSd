<?php

namespace App\Http\Controllers\datapelajaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\pelajaran;
use DB;

class data extends Controller
{
     public function pelajaran(){

     	$pelajaran = DB::table('pelajaran')->get();

       return view('admin.pelajaran.datapelajaran',compact('pelajaran'));
    }
    public function create(){
    	return view('admin.pelajaran.tambahpelajaran');
    }
     public function Store(Request $request){
    	$data_pelajaran = array();
    	$data_pelajaran['mata_pelajaran'] = $request->mata_pelajaran;
    	$validation = $request->validate([
    		'mata_pelajaran' => 'required'

    	]);
    	$tambah_pelajaran = DB::table('pelajaran')->insert($data_pelajaran);
    	return redirect()->route('pelajaran')
    						->with('success',' Mata Pelajaran Created Succesfully',200);
    }   
    public function Edit($id_pelajaran){
        $pelajaran = DB::table('pelajaran')->where('id',$id_pelajaran)->first();
        return view('admin.pelajaran.editpelajaran',compact('pelajaran'));
    }
    public function Update(Request $request, $id_pelajaran){
        $data_pelajaran = array();
        $data_pelajaran['mata_pelajaran'] = $request->mata_pelajaran;
        $validation = $request->validate([
            'mata_pelajaran' => 'required'

        ]);
        $tambah_kelas = DB::table('pelajaran')->where('id',$id_pelajaran)->update($data_pelajaran);
        return redirect()->route('pelajaran')
                            ->with('success','Mata Pelajaran Update Succesfully');
    }
        public function Delete($id_pelajaran){
        $pelajaran = DB::table('pelajaran')->where('id',$id_pelajaran)->first();
        $hapuspelajaran = DB::table('pelajaran')->where('id',$id_pelajaran)->delete();
        return redirect()->route('pelajaran')
                            ->with('success','pelajaran Deleted Succesfully');
    }
}
