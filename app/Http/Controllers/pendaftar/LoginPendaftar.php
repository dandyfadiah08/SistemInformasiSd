<?php

namespace App\Http\Controllers\pendaftar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginPendaftar extends Controller
{
        public function pendaftarlogin(){
    	return view('loginPendaftar.loginpendaftar');
    }
}
