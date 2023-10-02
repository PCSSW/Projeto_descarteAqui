<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view ('site.index');
});

Auth::routes();

Route::get('/login', function () {return view('auth.login');});
Route::get('/historico', function () {return view('site.historico');});
Route::get('/pesquisarCatador', function () {return view('site.pesquisarCatador');});
Route::get('/perfilCatador', function () {return view('site.perfilCatador');});
Route::get('/meuPerfil', function () {return view('site.perfil');});
Route::get('/verHistorico', function () {return view('site.verHistorico');});
Route::get('/agendamento', function () {return view('site.agendamento');});
Route::get('/cadastroCivil', function () {return view('site.cadastrocivil');});
Route::get('/cadastroCatador', function () {return view('site.cadastroCatador');});
Route::get('/continuaCatador', function () {return view('site.continuaCatador');});
Route::get('/avaliar', function () {return view('site.avaliar');});

