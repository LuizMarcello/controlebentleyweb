<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Distribuidor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;
use App\Http\Requests\DistribuidorRequest;
use Symfony\Component\HttpFoundation\Response;

class DistribuidorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $registros = Distribuidor::paginate(4);
        return view('distribuidor.indexDistribuidor', \compact('registros'));
    }

    /**
     *  Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('distribuidor.createDistribuidor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param DistribuidorRequest $request
     * @return Response
     */
    public function store(DistribuidorRequest $request): Response
    {
        $registro = Distribuidor::create($request->all());

        return \redirect()->route('distribuidors.show', $registro->id);
    }

    /**
     * Display the specified resource.
     *
     * @param Distribuidor $distribuidor
     * @return View
     *
     * Também usando "Route Model Binding", como no "edit" e "upgrade".
     */
    public function show(Distribuidor $distribuidor): View
    {
        return view('distribuidor.showDistribuidor', \compact('distribuidor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Distribuidor $distribuidor
     * @return View
     *
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar o Model "Distribuidor" filtrado
     * e dísponivel dentro da view retornada.
     */
    public function edit(Distribuidor $distribuidor): View
    {
      return view('distribuidor.editDistribuidor', \compact('distribuidor'));
    }

     /**
      * Update the specified resource in storage.
      *
      * @param DistribuidorRequest $request
      * @param Distribuidor $distribuidor
      * @return Response
      *
      * Usando a classe "DistribuidorRequest" para validar.
      * Também usando "Route Model Binding", como no "edit" acima.
      */
    public function update(DistribuidorRequest $request, Distribuidor $distribuidor): Response
    {
        $distribuidor->update($request->all());

        return \redirect()->route('distribuidors.show', $distribuidor);
    }

     /**
      * Remove the specified resource from storage.
      *
      * @param Distribuidor $distribuidor
      * @return Response

      * Também usando "Route Model Binding", como no "edit" acima.
      */
    public function destroy(Distribuidor $distribuidor): Response
    {
        $distribuidor->delete();

        return \redirect()->route('distribuidors.index');
    }
}
