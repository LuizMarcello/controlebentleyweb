<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FonteRequest;

use App\Models\Fonte;

class FonteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Fonte::paginate(1);
        return view('fonte.indexFonte', \compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('fonte.createFonte');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FonteRequest $request)
    {
        $registro = Fonte::create($request->all());

        return \redirect()->route('fontes.show', $registro->id);
    }


    /**
     * Display the specified resource.
     *
     * @param Fonte $fonte
     * @return \Illuminate\Http\Response
     * Também usando "Route Model Binding", como no "edit" e "upgrade".
     */
    public function show(Fonte $fonte)
    {
        return view('fonte.showFonte', \compact('fonte'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "Fonte" filtrado
     * e dísponivel dentro da view retornada.
     *
     */
    public function edit(Fonte $fonte)
    {
        return view('fonte.editFonte', \compact('fonte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param FonteRequest $request
     * @param Fonte $fonte
     * @return void
     *
     * Usando a classe "FonteRequest" para validar.
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function update(FonteRequest $request, Fonte $fonte)
    {
        $fonte->update($request->all());

        return \redirect()->route('fontes.show', $fonte);
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
