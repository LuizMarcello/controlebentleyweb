<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AntenaRequest;

use App\Models\Antena;

class AntenaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Antena::paginate(1);
        return view('antena.indexAntena', \compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('antena.createAntena');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AntenaRequest $request)
    {
        $registro = Antena::create($request->all());

        return \redirect()->route('antenas.show', $registro->id);
    }

    /**
     * Display the specified resource.
     *
     * @param Antena $antena
     * @return \Illuminate\Http\Response
     * Também usando "Route Model Binding", como no "edit" e "upgrade".
     */
    public function show(Antena $antena)
    {
        return view('antena.showAntena', \compact('antena'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "Antena" filtrado
     * e dísponivel dentro da view retornada.
     */
    public function edit(Antena $antena)
    {
        return view('antena.editAntena', \compact('antena'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AntenaRequest $request
     * @param Antena $antena
     * @return void
     *
     * Usando a classe "AntenaRequest" para validar.
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function update(AntenaRequest $request, Antena $antena)
    {
        $antena->update($request->all());

        return \redirect()->route('antenas.show', $antena);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function destroy(Antena $antena)
    {
        $antena->delete();

        return \redirect()->route('antenas.index');
    }
}


