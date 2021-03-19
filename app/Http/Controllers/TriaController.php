<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TriaRequest;

use App\Models\Tria;

class TriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Tria::paginate(2);
        return view('tria.indexTria', \compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tria.createTria');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TriaRequest $request)
    {
        $registro = Tria::create($request->all());

        return \redirect()->route('trias.show', $registro->id);
    }

   /**
     * Display the specified resource.
     *
     * @param Tria $tria
     * @return \Illuminate\Http\Response
     * Também usando "Route Model Binding", como no "edit" e "upgrade".
     */
    public function show(Tria $tria)
    {
        return view('tria.showTria', \compact('tria'));
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
    public function edit(Tria $tria)
    {
        return view('tria.editTria', \compact('tria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TriaRequest $request
     * @param Tria $tria
     * @return void
     *
     * Usando a classe "TriaRequest" para validar.
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function update(TriaRequest $request, Tria $tria)
    {
        $tria->update($request->all());

        return \redirect()->route('trias.show', $tria);
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
