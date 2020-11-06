<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $fillable = ['rua', 'bairro', 'cep', 'pais', 'estado', 'numero', 'complemento', 'cidade'];

    public $timestamps = false;
}
