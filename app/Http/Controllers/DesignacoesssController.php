<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Designacoesss;
use Illuminate\Http\Request;

class DesignacoesssController extends Controller
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
            $designacoesss = Designacoesss::where('name', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('password', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $designacoesss = Designacoesss::latest()->paginate($perPage);
        }

        return view('designacoesss.index', compact('designacoesss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('designacoesss.create');
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
			'name' => 'required|string|max:255',
			'email' => 'required|string|email|max:255|unique:users',
			'password' => 'required|string|min:8|confirmed'
		]);
        $requestData = $request->all();
        
        Designacoesss::create($requestData);

        return redirect('designacoesss')->with('flash_message', 'Designacoesss added!');
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
        $designacoesss = Designacoesss::findOrFail($id);

        return view('designacoesss.show', compact('designacoesss'));
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
        $designacoesss = Designacoesss::findOrFail($id);

        return view('designacoesss.edit', compact('designacoesss'));
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
			'name' => 'required|string|max:255',
			'email' => 'required|string|email|max:255|unique:users',
			'password' => 'required|string|min:8|confirmed'
		]);
        $requestData = $request->all();
        
        $designacoesss = Designacoesss::findOrFail($id);
        $designacoesss->update($requestData);

        return redirect('designacoesss')->with('flash_message', 'Designacoesss updated!');
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
        Designacoesss::destroy($id);

        return redirect('designacoesss')->with('flash_message', 'Designacoesss deleted!');
    }
}
