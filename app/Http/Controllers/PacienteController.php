<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Endereco;

class PacienteController extends Controller
{
    public function create()
    {
        return view('cadastro-paciente2');
    }

    public function cadastrarPaciente(Request $request)
    {
        // dd($request)->all();

        $endereco = new Endereco();

        
        $endereco->pais = $request->pais;
        $endereco->estado = $request->estado;
        $endereco->cidade = $request->cidade;
        $endereco->cep = $request->cep;
        $endereco->rua = $request->rua;
        $endereco->bairro = $request->bairro;
        $endereco->numero = $request->numero;
        $endereco->complemento = $request->complemento;

        $endereco->save();

        $paciente = new Paciente();

        $paciente->nome  = $request->nome_completo;
        $paciente->cpf = $request->cpf;
        $paciente->data_nascimento = $request->data_nascimento;
        $paciente->orgao_expedidor = $request->orgao_expedidor;
        $paciente->identidade = $request->identidade;
        $paciente->sexo = $request->sexo;
        $paciente->plano_saude = $request->plano_saude;
        $paciente->email = $request->email;
        $paciente->telefone = $request->telefone;
        $paciente->doencas_cronicas = $request->doencas_cronicas;
        $paciente->alergias = $request->alergias;
        $paciente->idendereco = $endereco->id;

        $paciente->save();

        return 'Paciente Cadastrado com Sucesso!';
    }
}
