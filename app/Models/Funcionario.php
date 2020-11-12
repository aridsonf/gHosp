<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'email', 'cpf', 'data_nascimento', 'endereco_id', 'identidade', 'orgao_expedidor', 'sexo', 'telefone'];

    public $timestamps = false;
    
    public function hasEndereco() { return $this->hasOne('App\Model\Endereco', 'id_endereco', 'endereco_id'); }
    public function hasTipoFuncionario() { return $this->hasOne('App\Model\TipoFuncionario', 'id', 'tipo_funcionario_id'); }
}
