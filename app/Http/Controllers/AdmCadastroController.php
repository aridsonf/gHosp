<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmCadastroController extends Controller
{
    public function admCadastro(){
        return view('adm-cadastro');
    }
}
