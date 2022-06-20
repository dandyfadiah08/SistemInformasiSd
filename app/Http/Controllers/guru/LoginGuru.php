<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\guru;
use App\progressLogin;
use DB;

class LoginGuru extends Controller
{
    public function gurulogin(){
    	return view('loginGuru.loginguru');
    }
    public function loginguru(Request $request){
        $data_NUPTK['NUPTK'] = $request->NUPTK;
        $NUPTK = guru::where('NUPTK','=',$request->NUPTK)->first();
        if ($NUPTK) {
            $tambah_NUPTK = DB::table('progressLogin')->insert($data_NUPTK);
            return view('guru.index');
        }else{
            return back()->with('fail','NUPTK Belum Terdaftar');
        }
    }
}
