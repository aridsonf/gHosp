<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmLobbyController extends Controller
{
    public function admLobby(){
        return view('adm-lobby');
    }
}
