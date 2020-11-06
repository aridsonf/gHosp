<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/cadastrar-paciente', 'App\Http\Controllers\PatientController@registerPatient');

Route::get('/cadastrar-profissional', 'App\Http\Controllers\ProfissionalController@registerProfissional');
