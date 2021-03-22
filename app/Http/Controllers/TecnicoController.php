<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TecnicoRequest;

use App\Models\Tecnico;

class TecnicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Tecnico::paginate(1);
        return view('Tecnico.indexTecnico', \compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('tecnico.createTecnico');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TecnicoRequest $request)
    {
        $registro = Tecnico::create($request->all());

        return \redirect()->route('tecnicos.show', $registro->id);
    }

    /**
     * Display the specified resource.
     *
     * @param Tecnico $tecnico
     * @return \Illuminate\Http\Response
     * Também usando "Route Model Binding", como no "edit" e "upgrade".
     */
    public function show(Tecnico $tecnico)
    {
        return view('tecnico.showTecnico', \compact('tecnico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "empresa" filtrado
     * e dísponivel dentro da view retornada.
     */
    public function edit(Tecnico $tecnico)
    {
        return view('tecnico.editTecnico', \compact('tecnico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TecnicoRequest $request
     * @param Tecnico $tecnico
     * @return void
     *
     * Usando a classe "TecnicoRequest" para validar.
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function update(TecnicoRequest $request, Tecnico $tecnico)
    {
        $tecnico->update($request->all());

        return \redirect()->route('tecnicos.show', $tecnico);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function destroy(Tecnico $tecnico)
    {
        $tecnico->delete();

        return \redirect()->route('tecnicos.index');
    }
}
