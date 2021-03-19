<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LnbRequest;

use App\Models\Lnb;

class LnbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Lnb::paginate(2);
        return view('lnb.indexLnb', \compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function create()
    {
        return view('lnb.createlnb');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LnbRequest $request)
    {
        $registro = Lnb::create($request->all());

        return \redirect()->route('lnbs.show', $registro->id);
    }

    /**
     * Display the specified resource.
     *
     * @param Lnb $lnb
     * @return \Illuminate\Http\Response
     * Também usando "Route Model Binding", como no "edit" e "upgrade".
     */
    public function show(Lnb $lnb)
    {
        return view('lnb.showlnb', \compact('lnb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "Lnb" filtrado
     * e dísponivel dentro da view retornada.
     *
     */
      public function edit(Lnb $lnb)
    {
return view('lnb.editLnb', \compact('lnb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param LnbRequest $request
     * @param Lnb $lnb
     * @return void
     *
     * Usando a classe "LnbRequest" para validar.
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function update(LnbRequest $request, Lnb $lnb)
    {
        $lnb->update($request->all());

        return \redirect()->route('lnbs.show', $lnb);
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
