<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    // public function registerPatient(){
    //     echo "<h1>Cadastrar Paciente</h1>";
    // }
    public function registerPatient(){
        return view('registerPatient');
    }
}
