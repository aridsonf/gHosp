<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'email', 'cpf', 'data_nascimento', 'plano_saude', 'idendereco', 'alergias', 'doencas_cronicas', 'identidade', 'orgao_expedidor', 'sexo', 'telefone'];

    public $timestamps = false;

    public function endereco(){
        return $this->hasOne(Endereco::class, 'idpessoa');
    }
}
