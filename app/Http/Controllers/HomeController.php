<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /* $this->middleware('auth'); */
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    // Retornando uma instância do model do usuário logado:

    /* dd(Auth::user()); */
    /* dd(Auth::user()->name); */
    /* dd(Auth::id()); */

    /* Usando o método "check()": */
    /* Verificação se tem usuário logado */
    /* if(Auth::check()) {
        echo 'tem logado';
     } else {
       echo 'Não tem logado';
     } */

        Auth::user();

      /* Método para login via código, pelo id do usuário: */
        /* Auth::loginUsingId(1); */

      /* Método para logout via código: */
       /*  Auth::logout(); */

        return view('home');
    }
}
