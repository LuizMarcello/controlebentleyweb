<?php

namespace App\Http\Controllers;

use App\Models\Ilnb;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\IlnbRequest;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class IlnbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $registros = Ilnb::paginate(2);
        return view('ilnb.indexIlnb', \compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('ilnb.createIlnb');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IlnbRequest $request): Response
    {
        $registro = Ilnb::create($request->all());

        return \redirect()->route('ilnbs.show', $registro->id);
    }

    /**
     * Display the specified resource.
     *
     * @param Ilnb $ilnb
     * @return \Illuminate\Http\Response
     * Também usando "Route Model Binding", como no "edit" e "upgrade".
     */
    public function show(Ilnb $ilnb): View
    {
        return view('ilnb.showilnb', \compact('ilnb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "Distribuidor" filtrado
     * e dísponivel dentro da view retornada.
     *
     */

    public function edit(Ilnb $ilnb): View
    {
        return view('ilnb.editIlnb', \compact('ilnb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param IilnbRequest $request
     * @param Iilnb $iilnb
     * @return void
     *
     * Usando a classe "IilnbRequest" para validar.
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function update(IlnbRequest $request, Ilnb $ilnb): Response
    {
        $ilnb->update($request->all());

        return \redirect()->route('ilnbs.show', $ilnb);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function destroy(Ilnb $ilnb): Response
    {
        $ilnb->delete();

        return \redirect()->route('ilnbs.index');
    }
}
