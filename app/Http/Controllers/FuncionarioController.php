<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;
use App\Models\Estado;
use App\Models\TipoFuncionario;
use App\Models\EspecialidadeMedica;
use App\Models\AreaAtuacaoMedica;

class FuncionarioController extends Controller
{
    public function carregarDados()
    {
        $paises    = Pais::get();
        $estados    = Estado::get();
        $tipos_funcionarios    = TipoFuncionario::get();
        $especialidades    = EspecialidadeMedica::get();
        $areas_atuacao    = AreaAtuacaoMedica::get();

        return view('cadastro-funcionario', compact('paises','estados', 'tipos_funcionarios', 'especialidades', 'areas_atuacao'));

    }
}
