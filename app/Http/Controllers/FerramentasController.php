<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Ferramenta;
use Illuminate\Http\Request;

class FerramentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $ferramentas = Ferramenta::where('user_id', 'LIKE', "%$keyword%")
                ->orWhere('classificacao', 'LIKE', "%$keyword%")
                ->orWhere('controle', 'LIKE', "%$keyword%")
                ->orWhere('categoria', 'LIKE', "%$keyword%")
                ->orWhere('medida', 'LIKE', "%$keyword%")
                ->orWhere('Descricao', 'LIKE', "%$keyword%")
                ->orWhere('Qtde', 'LIKE', "%$keyword%")
                ->orWhere('situacao', 'LIKE', "%$keyword%")
                ->orWhere('responsavel', 'LIKE', "%$keyword%")
                ->orWhere('desde', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $ferramentas = Ferramenta::latest()->paginate($perPage);
        }

        return view('ferramentas.index', compact('ferramentas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('ferramentas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'classificacao' => 'required',
			'controle' => 'required',
			'categoria' => 'required',
			'situacao' => 'required'
		]);
        $requestData = $request->all();
        
        Ferramenta::create($requestData);

        return redirect('ferramentas')->with('flash_message', 'Ferramenta added!');
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
        $ferramenta = Ferramenta::findOrFail($id);

        return view('ferramentas.show', compact('ferramenta'));
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
        $ferramenta = Ferramenta::findOrFail($id);

        return view('ferramentas.edit', compact('ferramenta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'classificacao' => 'required',
			'controle' => 'required',
			'categoria' => 'required',
			'situacao' => 'required'
		]);
        $requestData = $request->all();
        
        $ferramenta = Ferramenta::findOrFail($id);
        $ferramenta->update($requestData);

        return redirect('ferramentas')->with('flash_message', 'Ferramenta updated!');
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
        Ferramenta::destroy($id);

        return redirect('ferramentas')->with('flash_message', 'Ferramenta deleted!');
    }
}
