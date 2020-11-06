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

Route::get('/cadastro-parciente', function () {
    // return view('welcome');
    return view('cadastro-parciente');

});
Route::get('/cadastro-parciente2', function () {
    // return view('welcome');
    return view('cadastro-parciente2');

});

Route::post('/cadastrar-parciente', function (Request $request) {
    try{
        $dados = $request->all();
        // logica de cadastro
        return ["stts"=>1,"msg"=>"Cadastrado com sucesso"];
    } catch (\Throwable $th) {
        return ["stts"=>0,"msg"=>"Ocorreu um Erro","cod"=> $th->getmessage(),"linha"=> $th->getline()];
    }
});
Route::get('/cadastrar-paciente', 'App\Http\Controllers\PatientController@registerPatient');

Route::get('/cadastrar-profissional', 'App\Http\Controllers\ProfissionalController@registerProfissional');
