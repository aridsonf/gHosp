<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedimento extends Model
{
    use HasFactory;

    protected $fillable = ['data_procedimento', 'nome_procedimento', 'tipo_procedimento_id', 'situacao_procedimento_id', 'paciente_id'];

    public $timestamps = false;

    public function hasTipoProcedimento() { return $this->hasOne('App\Model\TipoProcedimento', 'id', 'tipo_procedimento_id'); }
    public function hasSituacaoProcedimento() { return $this->hasOne('App\Model\SituacaoProcedimento', 'id', 'situacao_procedimento_id'); }
    public function hasPaciente() { return $this->hasOne('App\Model\Paciente', 'id_paciente', 'paciente_id'); }

}
