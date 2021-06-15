<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CkeckTasks
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
        $ids = $request->session()->get('todotasks');

        /* Função "in_array()": 1º parâmetro: o id do item que está
           sendo enviado na url que será verificado se está no array e,
           2º parâmetro o array com os id´s. Retornará true quando não
           localiza o item no array. */
        if(!in_array($request->id, $ids)) {
            $request->session()->flash('error', 'Não foi possível excluir o item da lista');
            return redirect()->route('clientes.index');
        }

        return $next($request);
    }
}
