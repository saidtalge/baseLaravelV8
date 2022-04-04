<?php

namespace App\Http\Controllers;

use App\Models\Rotas;
use Illuminate\Http\Request;

class RotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rotas = Rotas::all();
        return view('rotas.index')->with('rotas',$rotas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rotas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Rotas::create($request->only(['name']));
        return redirect()->route('rotas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rotas  $rotas
     * @return \Illuminate\Http\Response
     */
    public function show(rotas $rotas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rotas  $rotas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rota = Rotas::find($id);
        return view('rotas.edit')->with('rota',$rota);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rotas  $rotas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'name' => 'required'
        ]);

        $rota = Rotas::find($id);
        $rota->update($request->only(['name']));
        return redirect()->route('rotas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rotas  $rotas
     * @return \Illuminate\Http\Response
     */
    public function destroy(rotas $rotas)
    {
        //
    }
}
