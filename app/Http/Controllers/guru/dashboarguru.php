<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboarguru extends Controller
{
    public function index(){
    	return view('guru.index');
    }
}
