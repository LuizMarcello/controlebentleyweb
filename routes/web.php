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

/* Desabilitando a rota(resource) "register": */
Auth::routes([
    'register' => false
]);

/* Definindo um grupo de rotas, através do método group(), para o middleware "auth", que é o
 * middlaware que verifica se o usuário está logado, se não estiver, direciona para o login.
 * Agora, todas as rotas dentro da função anômima, estão protegidas.
 */
Route::middleware('auth')->group(function() {
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

    Route::resource('migracao', 'MigracaoController');
    Route::resource('users', 'UsersController');
});

/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */
Route::get('/home', 'HomeController@index')->name('home');

/* Declarando um único método de rota que vai criar todas as rotas que precisamos: */
/* 1º parâmetro: O nome do recurso(no plural) e 2º parâmetro, o controler: */

Route::resource('ferramentas', 'FerramentasController');
Route::resource('equipamentos', 'EquipamentosController');

/* Route::resource('testetestes', 'TestetestesController'); */
/* Route::resource('testetestes', 'TestetestesController'); */
/* Route::resource('clientes', 'ClientesController'); */
/* Route::resource('clientes', 'ClientesController') */;

Route::resource('clientes', 'ClientesController');
Route::resource('designacoes', 'DesignacoesController');

Route::resource('designacoes', 'DesignacoesController');
Route::resource('designacoesss', 'DesignacoesssController');
Route::resource('designacoesss', 'DesignacoesssController');