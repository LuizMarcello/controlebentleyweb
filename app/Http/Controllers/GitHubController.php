<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GitHubController extends Controller
{
    public function buscar()
    {
        // https://api.github.com: Endereço da api
        // search/repositories: recurso da api a ser obtido
        //A api dará então uma resposta que será guardada na variável $response
        $response =  Http::get('https://api.github.com/search/repositories?q=LuizMarcello');

        /*  Methods that may be used to inspect the response:
        $response->body() : string; - "corpo" da resposta.
        $response->json() : array|mixed;
        $response->collect() : Illuminate\Support\Collection;
        $response->status() : int;
        $response->ok() : bool;
        $response->successful() : bool;
        $response->failed() : bool;
        $response->serverError() : bool;
        $response->clientError() : bool;
        $response->header($header) : string;
        $response->headers() : array; */

        $repositorios = [];
        if($response->successful()){
            $repositorios = $response->json()['items'];
        }

        return view('github.buscar', \compact('repositorios'));


    }
}
