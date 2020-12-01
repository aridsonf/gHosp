<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Funcionario;
use App\Models\Medico;
use App\Models\Enfermeiro;
use App\Models\Administrador;
use App\Models\Endereco;
use App\Models\Pais;
use App\Models\Estados;
use App\Models\Procedimento;
use App\Models\Consulta;
use App\Models\Cirurgia;
use App\Models\Exame;
use App\Models\Equipe;

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

    public function cadastrarFuncionario(Request $request)
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

        $funcionario = new Funcionario();

        $funcionario->cpf = $request->cpf;
        $funcionario->nome  = $request->nome_completo;
        $funcionario->data_nascimento = $request->data_nascimento;
        $funcionario->orgao_expedidor = $request->orgao_expedidor;
        $funcionario->identidade = $request->identidade;
        $funcionario->sexo = $request->sexo;
        $funcionario->email = $request->email;
        $funcionario->telefone = $request->telefone;
        $funcionario->endereco_id = $endereco->id;

        $funcionario->tipo_funcionario_id = $request->tipo_funcionario_id;

        $funcionario->save();

        if ($request->tipo_funcionario_id == 1){
            $medico = new Medico();

            $medico->crm = $request->medico['crm'];
            $medico->especialidade_id = $request->medico['especialidade_id'];
            $medico->area_atuacao_id = $request->medico['area_atuacao_id'];
            $medico->funcionario_id = $funcionario->id;
            
            $medico->save();

        }

        if ($request->tipo_funcionario_id == 2){
            $enfermeiro = new Enfermeiro();

            $enfermeiro->coren = $request->enfermeiro['coren'];
            $enfermeiro->funcionario_id = $funcionario->id;

            $enfermeiro->save();

        }

        if ($request->tipo_funcionario_id == 3){
            $administrador = new Administrador();

            $administrador->funcionario_id = $funcionario->id;

            $administrador->save();

        }
        return 'Funcionario Cadastrado com Sucesso!';
    }

    public function registrarProcedimento(Request $request)
    {
        $procedimento = new Procedimento();

        $procedimento->data_procedimento = $request->data_procedimento;
        $procedimento->nome_procedimento = $request->nome_procedimento;
        $procedimento->tipo_procedimento_id = $request->tipo_procedimento_id;
        $procedimento->situacao_procedimento_id = 4; // id 4 = SOLICITADO
        $procedimento->paciente_id = $request->paciente_id;

        $procedimento->save();

        if ($request->tipo_procedimento_id == 1) {

            $equipe = new Equipe();

            $equipe->chefe_id = $request->funcionario_id;
            $equipe->save();

            $cirurgia = new Cirurgia();

            $cirurgia->procedimento_id = $procedimento->id;
            $cirurgia->equipe_id = $equipe->id;

            $cirurgia->save();

        }

        if ($request->tipo_procedimento_id == 2) {

            $exame = new Exame();

            $exame->procedimento_id = $procedimento->id;
            $exame->save();

        }

        if ($request->tipo_procedimento_id == 3) {

            $consulta = new Consulta();

            $consulta->procedimento_id = $procedimento->id;
            $consulta->save();
            
        }
    }
}
