<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\TipoProcedimento;

class ProcedimentoController extends Controller
{
    public function carregarDados()
    {
        $pacientes    = Pacientes::get();
        $tipos_procedimentos    = TipoProcedimento::get();

        return view('registro-procedimento', compact('pacientes','tipos_procedimentos'));

    }
}
