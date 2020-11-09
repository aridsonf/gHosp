<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    public function hasEndereco() { return $this->hasOne('App\Model\Endereco', 'id_endereco', 'endereco_id'); }

}
