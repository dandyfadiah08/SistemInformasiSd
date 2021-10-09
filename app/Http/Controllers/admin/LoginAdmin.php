<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginAdmin extends Controller
{
    public function adminlogin(){
    	return view('loginAdmin.loginadmin');
    }
}
