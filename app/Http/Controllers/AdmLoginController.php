<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmLoginController extends Controller
{
    public function admLogin(){
        return view('adm-login');
    }    
}
