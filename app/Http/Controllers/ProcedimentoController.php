<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\Funcionario;
use App\Models\TipoProcedimento;

class ProcedimentoController extends Controller
{
    public function carregarDados()
    {
        $pacientes   = Paciente::get();
        $funcionarios   = Funcionario::get();
        $tipos_procedimentos  = TipoProcedimento::get();

        //dd($pacientes, $funcionarios, $tipos_procedimentos);

        return view('registro-procedimento', compact('pacientes', 'funcionarios', 'tipos_procedimentos'));

    }
}
