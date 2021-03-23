<?php

namespace App\Http\Controllers;

use App\Models\Groove;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\GrooveRequest;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class GrooveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $registros = Groove::paginate(1);
        return view('Groove.indexGroove', \compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request): View
    {
        return view('groove.createGroove');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GrooveRequest $request): Response
    {
        $registro = Groove::create($request->all());

        return \redirect()->route('grooves.show', $registro->id);
    }

    /**
     * Display the specified resource.
     *
     * @param Groove $groove
     * @return \Illuminate\Http\Response
     * Também usando "Route Model Binding", como no "edit" e "upgrade".
     */
    public function show(Groove $groove): View
    {
        return view('groove.showGroove', \compact('groove'));
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
     * Isto já vai tornar meu Model "Groove" filtrado
     * e dísponivel dentro da view retornada.
     */
    public function edit(Groove $groove): View
    {
        return view('groove.editGroove', \compact('groove'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Groove $request
     * @param Groove $groove
     * @return void
     *
     * Usando a classe "GrooveRequest" para validar.
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function update(GrooveRequest $request, Groove $groove): Response
    {
        $groove->update($request->all());

        return \redirect()->route('grooves.show', $groove);
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function destroy(Groove $groove): Response
    {
        $groove->delete();

        return \redirect()->route('grooves.index');
    }
}
