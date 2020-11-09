<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $fillable = ['rua', 'bairro', 'cep', 'pais_id', 'estado_id', 'numero', 'complemento', 'cidade'];

    public $timestamps = false;

    public function hasEstado() { return $this->hasOne('App\Model\Estado', 'id', 'estado_id'); }
    public function hasPais() { return $this->hasOne('App\Model\Pais', 'id', 'pais_id'); }

}
