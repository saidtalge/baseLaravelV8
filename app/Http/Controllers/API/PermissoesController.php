<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Permissoes;
use Illuminate\Http\Request;

class PermissoesController extends Controller
{
    public function index(Request $request)
    {
        $permissoes = Permissoes::all();
        return response()->json($permissoes,201);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $oper = Permissoes::create($input);
        if(!$oper) abort(501,'Falha na inserção do registro');
        return response()->json([],201);
    }

    public function show($id)
    {
        if(!$permissoes = Permissoes::find($id)) abort(501,'Perfil não encontrado!');
        return response()->json($permissoes,201);
    }

    public function update($id, Request $request)
    {
        $permissoes = Permissoes::find($id);
        if(!$permissoes) abort(501,'Perfil não encontrado!');
        $oper = $permissoes->update($request->all());
        if(!$oper) abort(501,'Falha na atualização do registro');
        return response()->json([],201);
    }

    public function destroy($id)
    {
        $permissoes = Permissoes::find($id);
        $oper = $permissoes->delete();
        if(!$oper) abort(501,'Falha na remoção do registro');
        return response()->json([],201);
    }
}
