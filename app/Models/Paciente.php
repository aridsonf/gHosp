<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'email', 'cpf', 'data_nascimento', 'plano_saude', 'endereco_id', 'alergias', 'doencas_cronicas', 'identidade', 'orgao_expedidor', 'sexo', 'telefone'];

    public $timestamps = false;

    public function hasEndereco() { return $this->hasOne('App\Model\Endereco', 'id_endereco', 'endereco_id'); }
}
