<?php

use App\Http\Controllers\ApresentacaoController;
use App\Http\Controllers\CepController;
use App\Services\CepService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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

Route::get('/', 'Auth\LoginController@showLoginForm');

/* Desabilitando a rota(resource) "register": */
Auth::routes([
    'register' => false
]);

Route::get('/blog', function () {
    return view('news.index')->with([
        'name'=> 'Blog da <strong>Bentley</strong>',
        'description'=> '<h4>Novidades via satelite</h4>',
        'posts'=> [
            [
               'subject' => 'Novidades do php 7.2',
               'content' => 'Conheca as novidades do php...'
            ],
            [
                'subject' => 'Novidades do c# 8',
                'content' => 'Conheca as novidades do c#...'
            ]
        ]
    ]);
});

/* Definindo um grupo de rotas, através do método group(), para o middleware "auth", que é o
 * middlaware que verifica se o usuário está logado, se não estiver, direciona para o login.
 * Agora, todas as rotas dentro da função anômima, estão protegidas.
 */
Route::middleware('auth')->group(function () {
    Route::resource('empresas', 'EmpresaController');

    Route::resource('tecnicos', 'TecnicoController');

    Route::resource('planos', 'PlanoController');

    Route::resource('distribuidors', 'DistribuidorController');

    Route::resource('migracao', 'MigracaoController');
    
    Route::resource('users', 'UsersController');
});


Route::get('/home', 'HomeController@index')->name('home');

/* Declarando um único método de rota que vai criar todas as rotas que precisamos: */
/* 1º parâmetro: O nome do recurso(no plural) e 2º parâmetro, o controler: */

Route::resource('ferramentas', 'FerramentasController');

Route::resource('equipamentos', 'EquipamentosController');

Route::resource('clientes', 'ClientesController');

Route::resource('designacoes', 'DesignacoesController');

Route::get('/github/buscar', 'GitHubController@buscar');

Route::get('/apiresttreinaweb/create', 'ApiRestTreinaWebController@create');

Route::get('/apiresttreinaweb/update', 'ApiRestTreinaWebController@update');

Route::get('/apiresttreinaweb/delete', 'ApiRestTreinaWebController@delete');

Route::get('/apiresttreinaweb/list', 'ApiRestTreinaWebController@list');

Route::get('/apiresttreinaweb/show', 'ApiRestTreinaWebController@show');

//"Injetando" aqui a classe php/serviço "CepService":
/* Route::get('/cepservice', function (CepService $cepService) {
    $cepService->consultar('86037700');
}); */

Route::get('/cep/{cep}', 'CepController');

Route::get('/empresa/relatorios/clientes', 'Relatorios\RelatoriosClientes')
        ->name('empresa.relatorios.clientes');

Route::get('olamundo', [ApresentacaoController::class, 'olaMundo']);

Route::get('cursos', [ApresentacaoController::class, 'cursos']);

Route::get('wiki', [ApresentacaoController::class, 'wiki']);
