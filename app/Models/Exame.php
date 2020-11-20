<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exame extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    public function hasProcedimento() { return $this->hasOne('App\Model\Procedimento', 'id_procedimento', 'procedimento_id'); }

}
