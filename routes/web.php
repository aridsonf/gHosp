<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');

});


Route::get('/cadastro-paciente', 'App\Http\Controllers\PacienteController@carregarDados');
Route::get('/cadastro-funcionario', 'App\Http\Controllers\FuncionarioController@carregarDados');


Route::post('/cadastrar-paciente', 'App\Http\Controllers\CadastroController@cadastrarPaciente');
Route::post('/cadastrar-funcionario', 'App\Http\Controllers\CadastroController@cadastrarFuncionario');

Route::post('/registrar-procedimento', 'App\Http\Controllers\CadastroController@registrarProcedimento');


Route::get('/adm-lobby', 'App\Http\Controllers\AdmLobbyController@admLobby');
Route::get('/adm-login', 'App\Http\Controllers\AdmLoginController@admLogin');
// Route::get('/cadastrar-paciente', 'App\Http\Controllers\PatientController@registerPatient');

// Route::get('/cadastrar-profissional', 'App\Http\Controllers\ProfissionalController@registerProfissional');
