<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Endereco;
use App\Models\Pais;
use App\Models\Estados;

class CadastroController extends Controller
{

    public function cadastrarPaciente(Request $request)
    {
        // dd($request)->all();

        $endereco = new Endereco();

        
        $endereco->pais_id = $request->pais;
        if($request->pais == 1){
            $endereco->estado_id = $request->estado_id;
            $endereco->nome_estado = "";
        } else {
            $endereco->estado_id = "";
            $endereco->nome_estado = $request->nome_estado;
        }
        
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
        $paciente->endereco_id = $endereco->id;

        $paciente->save();

        return 'Paciente Cadastrado com Sucesso!';
    }
}
