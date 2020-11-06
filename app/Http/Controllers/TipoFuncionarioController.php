<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TipoFuncionario;

class TipoFuncionarioController extends Controller
{
    public function getTipoFuncionario()
    {
        $tipo_funcionario = TipoFuncionario::get();
        
        return $tipo_funcionario;
    }
}
