<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PlanoRequest;

use App\Models\Plano;

class PlanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Plano::paginate(4);
        return view('plano.indexPlano', \compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plano.createPlano');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlanoRequest $request)
    {
        $registro = Plano::create($request->all());

        return \redirect()->route('planos.show', $registro->id);
    }

    /**
     * Display the specified resource.
     *
     * @param Plano $plano
     * @return \Illuminate\Http\Response
     * Também usando "Route Model Binding", como no "edit" e "upgrade".
     */
    public function show(Plano $plano)
    {
        return view('plano.showPlano', \compact('plano'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "Plano" filtrado
     * e dísponivel dentro da view retornada.
     */
    public function edit(Plano $plano)
    {
        /*  dd($plano); */
       return view('plano.editPlano', \compact('plano'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PlanoRequest $request
     * @param Plano $plano
     * @return void
     *
     * Usando a classe "PlanoRequest" para validar.
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function update(PlanoRequest $request, Plano $plano)
    {
        $plano->update($request->all());

        return \redirect()->route('planos.show', $plano);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function destroy(Plano $plano)
    {
        $plano->delete();

        return \redirect()->route('planos.index');
    }
}
