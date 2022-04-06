<?php

namespace App\Http\Controllers;

use App\Models\Permissoes;
use Illuminate\Http\Request;

class PermissoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permissoes  $permissoes
     * @return \Illuminate\Http\Response
     */
    public function show(Permissoes $permissoes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permissoes  $permissoes
     * @return \Illuminate\Http\Response
     */
    public function edit(Permissoes $permissoes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permissoes  $permissoes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->except(['_token','_method','dataTableFormat_length']);

        foreach($input as $key => $values){
            $rotas_id = intval(str_replace('rota-','',$key));
            if($values == 0){ 
                Permissoes::where('perfil_id',$id)->where('rotas_id',$rotas_id)->delete();
            }else {
                Permissoes::updateOrCreate(
                    ['perfil_id' =>  $id,'rotas_id' =>  $rotas_id],
                    ['perfil_id' =>  $id,'rotas_id' =>  $rotas_id,'rules' => $values]
                );
            }
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permissoes  $permissoes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permissoes $permissoes)
    {
        //
    }
}
