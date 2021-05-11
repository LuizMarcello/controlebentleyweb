<?php

namespace App\Http\Controllers\Relatorios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RelatoriosClientes extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $clientes = [];

        return view('empresa.relatorios.clientes', \compact('clientes'));

    }
}
