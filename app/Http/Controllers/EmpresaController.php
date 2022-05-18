<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\EmpresaRequest;
use Symfony\Component\HttpFoundation\Response;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $tipo = $request->tipo;

        $this->validaTipo($tipo);

        $empresas = Empresa::todasPorTipo($tipo);

        return view('empresa.index', \compact('empresas', 'tipo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return View
     */
    public function create(Request $request): View
    {
        $this->validaTipo($request->tipo);

        return view('empresa.create', ['tipo' => $request->tipo]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EmpresaRequest $request
     * @return Response
     */
    public function store(EmpresaRequest $request): Response
    {
        $empresa = Empresa::create($request->all());

        return \redirect()->route('empresas.show', $empresa->id);
    }

    /**
     * Display the specified resource.
     *
     * @param Empresa $empresa
     * @return View
     * Também usando "Route Model Binding", como no "edit" e "upgrade".
     */
    public function show(Empresa $empresa): View
    {
        return view('empresa.show', \compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "empresa" filtrado
     * e dísponivel dentro da view retornada.
     *
     * @param Empresa $empresa
     * @return View
     */
    public function edit(Empresa $empresa): View
    {

        $tipo = $empresa->tipo;

        if ($tipo !== 'cliente' && $tipo !== 'representante') {
            return \abort(404);
        }
       return view('empresa.edit', \compact('empresa', 'tipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * Também usando "Route Model Binding", como no "edit" acima.
     * @param Empresa $empresa
     *
     * Usando a classe EmpresaRequest para validar
     * @param EmpresaRequest $request
     *
     * @return Response
     */
    public function update(EmpresaRequest $request, Empresa $empresa): Response
    {
        $empresa->update($request->all());

        return \redirect()->route('empresas.show', $empresa);
    }

    /**
     * Remove the specified resource from storage.
     *
     * Também usando "Route Model Binding", como no "edit" acima.
     * @param Empresa $empresa
     *
     * @param Request $request
     *
     * @return Response
     */
    public function destroy(Empresa $empresa, Request $request): Response
    {
        $this->validaTipo($request->tipo);

        $empresa->delete();

        return \redirect()->route('empresas.index', ['tipo'=>$request->tipo]);
    }

    /**
     * Verifica o tipo, se é cliente ou representante
     *
     * @param string $tipo
     * @return void
     */
    private function validaTipo(string $tipo): void
    {
        if ($tipo !== 'cliente' && $tipo !== 'representante') {
            \abort(404);
        }
    }
}
