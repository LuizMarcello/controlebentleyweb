<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\DistribuidorRequest;

use App\Models\Distribuidor;

class DistribuidorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Distribuidor::paginate(4);
        return view('distribuidor.indexDistribuidor', \compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('distribuidor.createDistribuidor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DistribuidorRequest $request)
    {
        $registro = Distribuidor::create($request->all());

        return \redirect()->route('distribuidors.show', $registro->id);
    }

    /**
     * Display the specified resource.
     *
     * @param Distribuidor $distribuidor
     * @return \Illuminate\Http\Response
     * Também usando "Route Model Binding", como no "edit" e "upgrade".
     */
    public function show(Distribuidor $distribuidor)
    {
        return view('distribuidor.showDistribuidor', \compact('distribuidor'));
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
     * Isto já vai tornar meu Model "Distribuidor" filtrado
     * e dísponivel dentro da view retornada.
     */
    public function edit(Distribuidor $distribuidor)
    {
        /*  dd($empresa); */
       return view('distribuidor.editDistribuidor', \compact('distribuidor'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param DistribuidorRequest $request
     * @param Distribuidor $distribuidor
     * @return void
     *
     * Usando a classe "DistribuidorRequest" para validar.
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function update(DistribuidorRequest $request, Distribuidor $distribuidor)
    {
        $distribuidor->update($request->all());

        return \redirect()->route('distribuidors.show', $distribuidor);
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
