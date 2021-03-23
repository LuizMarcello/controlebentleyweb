<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ModemRequest;

use App\Models\Modem;

class ModemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Modem::paginate(3);
        return view('modem.indexModem', \compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modem.createModem');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ModemRequest $request)
    {
        $registro = Modem::create($request->all());

        return \redirect()->route('modens.show', $registro->id);
    }

    /**
     * Display the specified resource.
     *
     * @param Modem $modem
     * @return \Illuminate\Http\Response
     * Também usando "Route Model Binding", como no "edit" e "upgrade".
     */
    public function show(Modem $modem)
    {
        return view('modem.showModem', \compact('modem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "Modem" filtrado
     * e dísponivel dentro da view retornada.
     *
     */
    public function edit(Modem $modem)
    {

        return view('modem.editModem', \compact('modem'));

    }

   /**
     * Update the specified resource in storage.
     *
     * @param Modem $request
     *
     * @return void
     *
     * Usando a classe "ModemRequest" para validar.
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function update(ModemRequest $request, Modem $modem)
    {
        $modem->update($request->all());

        return \redirect()->route('modens.show', $modem);
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function destroy(Modem $modem)
    {
        $modem->delete();

        return \redirect()->route('modens.index');
    }
}
