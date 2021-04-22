<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Repositories\ApiRestTreinaWebRepository;

class ApiRestTreinaWebController extends Controller
{
    //Criando uma ação(action):
    //"Injetando" aqui a classe do repositório ApiRestTreinaWebRepository:
    public function create(ApiRestTreinaWebRepository $apiRestTreinaweb)
    {
        $resposta = $apiRestTreinaweb->create([
            'nome' => 'PHP Avançado',
            'linguagem' => 'PHP'
        ]);

        if($resposta){
            return 'Criado com sucesso.';
        }

        return 'Êrro ao criar.';
    }

     //Criando uma ação(action):
    //"Injetando" aqui a classe do repositório ApiRestTreinaWebRepository:
    public function update(ApiRestTreinaWebRepository $apiRestTreinaweb)
    {
        $resposta = $apiRestTreinaweb->update('A26OnXzfDXVt2Lgo', [
            'nome' => 'PHP Principais fundamentos',
            'linguagem' => 'PHP'
        ]);

        if($resposta){
            return 'Atualizado com sucesso.';
        }

        return 'Êrro ao atualizar.';
    }
}
