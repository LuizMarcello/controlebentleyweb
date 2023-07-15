<?php

use App\Http\Controllers\TecnicoController;
use App\Http\Middleware\CheckTasks;
use App\Http\Controllers\ApresentacaoController;
use App\Http\Controllers\CepController;
use App\Models\Tecnico;
use App\Http\Controllers\RegisterController;
use App\Services\CepService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
<<<<<<< HEAD

require __DIR__.'/auth.php';
=======
>>>>>>> d61aced613aee88154a05f97e96035cbcd81d14e

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now update something great!
|
*/

/* Esta rota é acrescentada durante a ativação da autenticação do láravel,
   pois ela tem todos os métodos necessários para a autenticação. Quando
   fazemos o login ou nos registramos, ele nos rediriciona para o /home. */
Route::get('/', 'Auth\LoginController@showLoginForm');

/* Desabilitando a rota(resource) "register": */
Auth::routes([
    'register' => false
]);
<<<<<<< HEAD

/* Esta rota é acrescentada na ativação da autenticação do láravel,
   para não termos êrros durante a autenticação */
/* Route::get('/home', 'HomeController@index')->name('home'); */

/* Definindo um grupo de rotas, através do método group(), para o middleware "auth", que é o
 * middlaware que verifica se o usuário está logado, se não estiver, direciona para o login.
 * Agora, todas as rotas dentro da função anômima, estão protegidas pela autenticação. */
/* Declarando um único método de rota que vai criar todas as rotas que precisamos: */
/* 1º parâmetro: O nome do recurso(no plural) e 2º parâmetro, o controler: */
Route::middleware('auth')->group(function () {

    Route::resource('empresas', 'EmpresaController');

    Route::resource('tecnicos', 'TecnicoController');

    Route::resource('historicos', 'HistoricoController');

    Route::resource('planos', 'PlanoController');

    Route::resource('clientes', 'ClientesController');

    Route::resource('representantes', 'RepresentanteController');

    Route::resource('migracao', 'MigracaoController');

    Route::resource('users', 'UsersController');

    Route::resource('ferramentas', 'FerramentasController');

    Route::resource('equipamentos', 'EquipamentosController');

    Route::resource('designacoes', 'DesignacoesController');

    Route::resource('medirvelocidades', 'MedirVelocidadeController');

    Route::resource('modelocontratos', 'ModelocontratoController');

    Route::resource('contratos', 'ContratoController');

    Route::resource('chamados', 'ChamadoController');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
});

//"Injetando" aqui a classe php/serviço "CepService":
/* Route::get('/cepservice', function (CepService $cepService) {
    $cepService->consultar('86037700');
});
 */
Route::get('/cep/{cep}', 'CepController');

Route::get('/empresa/relatorios/clientes', 'Relatorios\RelatoriosClientes')
    ->name('empresa.relatorios.clientes');

/* Middlewares: Criando um "grupo de rotas" para aplicar um middleware para várias rotas: */
Route::group(['middleware' => ['alerttasks', 'auth']], function () {
    /* Aqui dentro desta função anônima, todas as rotas que farão parte */
    /* Route::get('tarefas/adicionar/{id}','ToDoTasksController@store'); */
    /* Route::get('tarefas/deletar/{id}','ToDoTasksController@destroy'); */
});
=======
>>>>>>> d61aced613aee88154a05f97e96035cbcd81d14e


<<<<<<< HEAD
=======
/* Esta rota é acrescentada na ativação da autenticação do láravel,
   para não termos êrros durante a autenticação */
Route::get('/home', 'HomeController@index')->name('home');

/* Definindo um grupo de rotas, através do método group(), para o middleware "auth", que é o
 * middlaware que verifica se o usuário está logado, se não estiver, direciona para o login.
 * Agora, todas as rotas dentro da função anômima, estão protegidas pela autenticação. */
/* Declarando um único método de rota que vai criar todas as rotas que precisamos: */
/* 1º parâmetro: O nome do recurso(no plural) e 2º parâmetro, o controler: */
Route::middleware('auth')->group(function () {

    Route::resource('empresas', 'EmpresaController');

    Route::resource('tecnicos', 'TecnicoController');

    Route::resource('historicos', 'HistoricoController');

    Route::resource('planos', 'PlanoController');

        Route::resource('clientes', 'ClientesController');

    Route::resource('representantes', 'RepresentanteController');

    Route::resource('migracao', 'MigracaoController');

    Route::resource('users', 'UsersController');

    Route::resource('ferramentas', 'FerramentasController');

    Route::resource('equipamentos', 'EquipamentosController');

    Route::resource('designacoes', 'DesignacoesController');

    Route::resource('medirvelocidades', 'MedirVelocidadeController');

    Route::resource('modelocontratos', 'ModelocontratoController');

    Route::resource('contratos', 'ContratoController');

    Route::resource('chamados', 'ChamadoController');
});

//"Injetando" aqui a classe php/serviço "CepService":
/* Route::get('/cepservice', function (CepService $cepService) {
    $cepService->consultar('86037700');
});
 */
Route::get('/cep/{cep}', 'CepController');

Route::get('/empresa/relatorios/clientes', 'Relatorios\RelatoriosClientes')
    ->name('empresa.relatorios.clientes');

/* Middlewares: Criando um "grupo de rotas" para aplicar um middleware para várias rotas: */
Route::group(['middleware' => ['alerttasks', 'auth']], function () {
    /* Aqui dentro desta função anônima, todas as rotas que farão parte */
    /* Route::get('tarefas/adicionar/{id}','ToDoTasksController@store'); */
    /* Route::get('tarefas/deletar/{id}','ToDoTasksController@destroy'); */
});
>>>>>>> d61aced613aee88154a05f97e96035cbcd81d14e
