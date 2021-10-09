<?php

namespace App\Http\Controllers\daftar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pendaftar extends Controller
{
            public function pendaftarcalonsiswa(){
    	return view('daftarcalonsiswa.daftarsiswa');
    }
}
