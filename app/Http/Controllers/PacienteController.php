<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;
use App\Models\Estado;

class PacienteController extends Controller
{
    public function carregarDados()
    {
        $paises    = Pais::get();
        $estados    = Estado::get();

        return view('cadastro-paciente', compact('paises','estados'));

    }
}
