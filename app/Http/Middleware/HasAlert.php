<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HasAlert
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      /* Primeiro executando todas as camadas da aplicação, e colocando
         tudo dentro da variável "$response":) */
        $response = $next($request);

      /* Middleware tipo "after", fica no meio, depois que
         executa todas as camadas, é executado a lógica do middleware: */
      /* Se não encontrar nada no array, retorna um array vazio */
         $ids = $request->session()->get('todotasks', []);

        /*  Verifica se tem alguma coisa dentro dos id´s: */
         if($ids){
             $tasks = count($ids);
             $request->session()->flash('alert', "Você tem {$tasks} tarefas pendentes");
         } 

      /* Depois devolve o retôrno para a aplicação cliente que chamou o sistema.  */
        return $response;
    }
}
