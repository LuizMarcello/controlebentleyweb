<?php

//Classe/Repositorio de dados onde será tratada toda parte de
//requsições da api, para persistir, obter, alterar e excluir os dados.

namespace App\Repositories;

use Illuminate\Support\Facades\Http;

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


class ApiRestTreinaWebRepository
{
    /* Um método que receberá como parâmetro, um array com os dados que serão criados na api */
    public function create(array $dados)
    {
       $response = Http::post('http://192.168.100.26:3002/api/treinaweb/curso', $dados);

       return $response->successful();
    }

    /* Um método que receberá como parâmetro, o id e os dados que serão atualizados na api */
    public function update(string $id, array $dados)
    {
       $response = Http::put("http://192.168.100.26:3002/api/treinaweb/curso?id={$id}", $dados);

       return $response->successful();
    }
}
