<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Repositories\ApiRestTreinaWebRepository;

class ApiRestTreinaWebController extends Controller
{
    //"Injetando" aqui,através deste contrutor, a classe do
    // repositório ApiRestTreinaWebRepository:
    //Criando uma propriedade:
    public ApiRestTreinaWebRepository $apiRestTreinawebRepository;

    public function __construct(ApiRestTreinaWebRepository $apiRestTreinaWebRepository)
    {
        $this->apiRestTreinawebRepository = $apiRestTreinaWebRepository;
    }

    //Criando uma ação(action):
    public function create()
    {
        $resposta = $this->apiRestTreinawebRepositoryTreinaweb->create([
            'nome' => 'PHP Avançado',
            'linguagem' => 'PHP'
        ]);

        if($resposta){
            return 'Criado com sucesso.';
        }

        return 'Êrro ao criar.';
    }

    //Criando uma ação(action):
    public function update()
    {
        $resposta = $this->apiRestTreinawebRepository->update('A26OnXzfDXVt2Lgo', [
            'nome' => 'PHP Principais fundamentos',
            'linguagem' => 'PHP'
        ]);

        if($resposta){
            return 'Atualizado com sucesso.';
        }

        return 'Êrro ao atualizar.';
    }

    //Criando uma ação(action):
    public function delete()
    {
        $resposta =$this->apiRestTreinawebRepository->delete('A26OnXzfDXVt2Lgo');

        if($resposta){
            return 'Removido com sucesso.';
        }

        return 'Êrro ao remover.';
    }

    //Criando uma ação(action):
    public function list()
    {
        $cursos = $this->apiRestTreinawebRepositoryb->list();

        dd($cursos);
    }

    //Criando uma ação(action):
    public function show()
    {
        $curso = $this->apiRestTreinawebRepository->show('oWEnlkjW58GOcG8a');

        dd($curso);
    }
}
