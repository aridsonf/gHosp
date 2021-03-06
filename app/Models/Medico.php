<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function hasFuncionario() { return $this->hasOne('App\Model\Funcionario', 'id_funcionario', 'funcionario_id'); }
    public function hasEspecialidade() { return $this->hasOne('App\Model\EspecialidadeMedica', 'id', 'especialidade_id'); }
    public function hasAreaAtuacao() { return $this->hasOne('App\Model\AreaAtuacaoMedica', 'id', 'area_atuacao_id'); }

}
