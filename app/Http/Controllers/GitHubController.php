<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\GithubService;

class GitHubController extends Controller
{
    // "Injetando" aqui a classe do serviço GithubService:
    public function buscar(GithubService $github)
    {
        $repositorios = $github->buscarRepositorios();
        
        return view('github.buscar', \compact('repositorios'));
    }
}
