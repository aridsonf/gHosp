<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    public function hasFuncionario() { return $this->hasOne('App\Model\Funcionario', 'id_funcionario', 'chefe_id'); }

}
