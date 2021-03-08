<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'Auth\LoginController@showLoginForm');

Auth::routes();

/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */
Route::get('/home', 'HomeController@index')->name('home');

/* Declarando um único método de rota que vai criar todas as rotas que precisamos: */
/* 1º parâmetro: O nome do recurso(no plural) e 2º parâmetro, o controler(no singular): */
Route::resource('empresas', 'EmpresaController');
Route::resource('modens', 'ModemController');
Route::resource('antenas', 'AntenaController');
Route::resource('cabos', 'CaboController');
Route::resource('fontes', 'FonteController');
Route::resource('grooves', 'GrooveController');
Route::resource('tecnicos', 'TecnicoController');
Route::resource('roteadors', 'RoteadorController');
Route::resource('planos', 'PlanoController');
Route::resource('distribuidors', 'DistribuidorController');
Route::resource('lnbs', 'LnbController');
Route::resource('ilnbs', 'IlnbController');
Route::resource('trias', 'TriaController');
Route::resource('designacao', 'DesignacaoController');
Route::resource('migracao', 'MigracaoController');

