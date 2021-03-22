<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CaboRequest;

use App\Models\Cabo;

class CaboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $registros = Cabo::paginate(1);
        return view('cabo.indexCabo', \compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('cabo.createCabo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CaboRequest $request)
    {
        $registro = Cabo::create($request->all());

        return \redirect()->route('cabos.show', $registro->id);
    }

   /**
     * Display the specified resource.
     *
     * @param Cabo $cabo
     * @return \Illuminate\Http\Response
     * Também usando "Route Model Binding", como no "edit" e "upgrade".
     */
    public function show(Cabo $cabo)
    {
        return view('cabo.showCabo', \compact('cabo'));
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
     * Isto já vai tornar meu Model "Cabo" filtrado
     * e dísponivel dentro da view retornada.
     */
    public function edit(Cabo $cabo)
    {
        return view('cabo.editCabo', \compact('cabo'));
    }


   /**
     * Update the specified resource in storage.
     *
     * @param CaboRequest $request
     * @param Cabo $cabo
     * @return void
     *
     * Usando a classe "CaboRequest" para validar.
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function update(CaboRequest $request, Cabo $cabo)
    {
        $cabo->update($request->all());

        return \redirect()->route('cabos.show', $cabo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function destroy(Cabo $cabo)
    {
        $cabo->delete();

        return \redirect()->route('cabos.index');
    }
}
