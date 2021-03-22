<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Http\Requests\EmpresaRequest;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tipo = $request->tipo;

        if ($tipo !== 'cliente' && $tipo !== 'fornecedor') {
            return \abort(404);
        }

        $empresas = Empresa::todasPorTipo($tipo);

        return view('empresa.index', \compact('empresas', 'tipo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $tipo = $request->tipo;

        if ($tipo !== 'cliente' && $tipo !== 'fornecedor') {
            return \abort(404);
        }

        return view('empresa.create', \compact('tipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpresaRequest $request)
    {
        $empresa = Empresa::create($request->all());

        return \redirect()->route('empresas.show', $empresa->id);
    }

    /**
     * Display the specified resource.
     *
     * @param Empresa $empresa
     * @return \Illuminate\Http\Response
     * Também usando "Route Model Binding", como no "edit" e "upgrade".
     */
    public function show(Empresa $empresa)
    {
        return view('empresa.show', \compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Empresa $empresa
     * @return void
     *
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "empresa" filtrado
     * e dísponivel dentro da view retornada.
     */
    public function edit(Empresa $empresa)
    {

        $tipo = $empresa->tipo;

        if ($tipo !== 'cliente' && $tipo !== 'fornecedor') {
            return \abort(404);
        }
       return view('empresa.edit', \compact('empresa', 'tipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EmpresaRequest $request
     * @param Empresa $empresa
     * @return void
     *
     * Usando a classe "EmpresaRequest" para validar.
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function update(EmpresaRequest $request, Empresa $empresa)
    {
        $empresa->update($request->all());

        return \redirect()->route('empresas.show', $empresa);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function destroy(Empresa $empresa, Request $request)
    {
        $tipo = $request->tipo;

        if ($tipo !== 'cliente' && $tipo !== 'fornecedor') {
            return \abort(404);
        }

        $empresa->delete();

        return \redirect()->route('empresas.index', ['tipo'=>$tipo]);
    }
}

