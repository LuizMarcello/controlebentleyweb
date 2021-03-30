<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Testetestis;
use Illuminate\Http\Request;

class TestetestesController extends Controller
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
            $testetestes = Testetestis::where('user_id', 'LIKE', "%$keyword%")
                ->orWhere('nome_razaosocial', 'LIKE', "%$keyword%")
                ->orWhere('ie_rg', 'LIKE', "%$keyword%")
                ->orWhere('documento', 'LIKE', "%$keyword%")
                ->orWhere('nome_contato', 'LIKE', "%$keyword%")
                ->orWhere('celular1', 'LIKE', "%$keyword%")
                ->orWhere('celular2', 'LIKE', "%$keyword%")
                ->orWhere('telefone1', 'LIKE', "%$keyword%")
                ->orWhere('telefone2', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('instalador', 'LIKE', "%$keyword%")
                ->orWhere('banda', 'LIKE', "%$keyword%")
                ->orWhere('formapagamento', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $testetestes = Testetestis::latest()->paginate($perPage);
        }

        return view('testetestes.index', compact('testetestes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('testetestes.create');
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
        
        $requestData = $request->all();
        
        Testetestis::create($requestData);

        return redirect('testetestes')->with('flash_message', 'Testetestis added!');
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
        $testetestis = Testetestis::findOrFail($id);

        return view('testetestes.show', compact('testetestis'));
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
        $testetestis = Testetestis::findOrFail($id);

        return view('testetestes.edit', compact('testetestis'));
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
        
        $requestData = $request->all();
        
        $testetestis = Testetestis::findOrFail($id);
        $testetestis->update($requestData);

        return redirect('testetestes')->with('flash_message', 'Testetestis updated!');
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
        Testetestis::destroy($id);

        return redirect('testetestes')->with('flash_message', 'Testetestis deleted!');
    }
}
