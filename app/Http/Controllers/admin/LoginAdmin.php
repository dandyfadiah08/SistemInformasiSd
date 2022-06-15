<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use DB;

class LoginAdmin extends Controller
{
    public function adminlogin(){
    	return view('loginAdmin.loginadmin');
    }
    public function loginadmin(Request $request){
        $user = User::where('email','=',$request->email)->first();
        $password = User::where('password','=',$request->password)->first();
        if ($user) {
            if ($password) {
                return view('Admin.index');
            } else {
                return back()->with('fail','Password Salah');
            }
            
        }else{
            return back()->with('fail','Email Belum Terdaftar');
        }
    }
}
