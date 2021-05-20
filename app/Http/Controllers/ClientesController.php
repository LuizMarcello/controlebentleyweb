<?php

namespace App\Http\Controllers;

/* namespace App\Http\Requests; */
use App\Http\Requests;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


use App\Http\Controllers\Controller;
use App\Http\Requests\ClienteRequest;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
      /*   $request->session()->put('cursos', ['Laravel', 'Slim']); */
      /*   $request->session()->push('cursos', 'Silex'); */

        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $clientes = Cliente::where('user_id', 'LIKE', "%$keyword%")
                ->orWhere('nome_razaosocial', 'LIKE', "%$keyword%")
                ->orWhere('ie_rg', 'LIKE', "%$keyword%")
                ->orWhere('documento', 'LIKE', "%$keyword%")
                ->orWhere('inscricaomunicipal', 'LIKE', "%$keyword%")
                ->orWhere('datanascimento', 'LIKE', "%$keyword%")
                ->orWhere('nome_contato', 'LIKE', "%$keyword%")
                ->orWhere('celular1', 'LIKE', "%$keyword%")
                ->orWhere('celular2', 'LIKE', "%$keyword%")
                ->orWhere('telefone1', 'LIKE', "%$keyword%")
                ->orWhere('telefone2', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('chave', 'LIKE', "%$keyword%")
                ->orWhere('equipamento', 'LIKE', "%$keyword%")
                ->orWhere('dataadesao', 'LIKE', "%$keyword%")
                ->orWhere('datacadastro', 'LIKE', "%$keyword%")
                ->orWhere('observacao', 'LIKE', "%$keyword%")
                ->orWhere('cep1', 'LIKE', "%$keyword%")
                ->orWhere('rua1', 'LIKE', "%$keyword%")
                ->orWhere('numero1', 'LIKE', "%$keyword%")
                ->orWhere('bairro1', 'LIKE', "%$keyword%")
                ->orWhere('cidade1', 'LIKE', "%$keyword%")
                ->orWhere('estado1', 'LIKE', "%$keyword%")
                ->orWhere('celular11', 'LIKE', "%$keyword%")
                ->orWhere('telefone11', 'LIKE', "%$keyword%")
                ->orWhere('cep2', 'LIKE', "%$keyword%")
                ->orWhere('rua2', 'LIKE', "%$keyword%")
                ->orWhere('numero2', 'LIKE', "%$keyword%")
                ->orWhere('bairro2', 'LIKE', "%$keyword%")
                ->orWhere('cidade2', 'LIKE', "%$keyword%")
                ->orWhere('estado2', 'LIKE', "%$keyword%")
                ->orWhere('celular21', 'LIKE', "%$keyword%")
                ->orWhere('telefone21', 'LIKE', "%$keyword%")
                ->orWhere('cep3', 'LIKE', "%$keyword%")
                ->orWhere('rua3', 'LIKE', "%$keyword%")
                ->orWhere('numero3', 'LIKE', "%$keyword%")
                ->orWhere('bairro3', 'LIKE', "%$keyword%")
                ->orWhere('cidade3', 'LIKE', "%$keyword%")
                ->orWhere('estado3', 'LIKE', "%$keyword%")
                ->orWhere('celular31', 'LIKE', "%$keyword%")
                ->orWhere('telefone31', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('banda', 'LIKE', "%$keyword%")
                ->orWhere('formapagamento', 'LIKE', "%$keyword%")
                ->orWhere('instalador', 'LIKE', "%$keyword%")
                ->orWhere('distribuidor', 'LIKE', "%$keyword%")
                ->orWhere('plano', 'LIKE', "%$keyword%")
                ->orWhere('representante', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            /* $clientes = Cliente::latest()->paginate($perPage); */
               $clientes = Cliente::latest()->paginate(3);
        }

        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
       /*  dd(session('cursos')); */

        return view('clientes.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ClienteRequest $request): Response
    {
        $requestData = $request->all();

        Cliente::create($requestData);

        return redirect('clientes')->with('flash_message', 'Cliente added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(ClienteRequest $request, $id)
    {
        $requestData = $request->all();
        $cliente = Cliente::findOrFail($id);
        $cliente->update($requestData);

        return redirect('clientes')->with('flash_message', 'Cliente updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Cliente::destroy($id);
        return redirect('clientes')->with('flash_message', 'Cliente deleted!');
    }
}
