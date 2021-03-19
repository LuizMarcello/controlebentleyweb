<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RoteadorRequest;

use App\Models\Roteador;

class RoteadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $registros = Roteador::paginate(2);
        return view('roteador.indexRoteador', \compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('roteador.createRoteador');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoteadorRequest $request)
    {
        $registro = Roteador::create($request->all());

        return \redirect()->route('roteadors.show', $registro->id);
    }

     /**
     * Display the specified resource.
     *
     * @param Roteador $roteador
     * @return \Illuminate\Http\Response
     * Também usando "Route Model Binding", como no "edit" e "upgrade".
     */
    public function show(Roteador $roteador)
    {
        return view('roteador.showroteador', \compact('roteador'));
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
     * Isto já vai tornar meu Model "Roteador" filtrado
     * e dísponivel dentro da view retornada.
     *
     */
    public function edit(Roteador $roteador)
    {
        return view('roteador.editRoteador', \compact('roteador'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param Roteador Request $request
     * @param Roteador $Roteador
     * @return void
     *
     * Usando a classe "RoteadorRequest" para validar.
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function update(RoteadorRequest $request, Roteador $roteador)
    {
        $roteador->update($request->all());

        return \redirect()->route('roteadors.show', $roteador);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
