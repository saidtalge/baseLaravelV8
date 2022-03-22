<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Perfil;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index(Request $request)
    {
        $perfis = Perfil::all();
        return response()->json($perfis,201);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $oper = Perfil::create($input);
        if(!$oper) abort(501,'Falha na inserção do registro');
        return response()->json([],201);
    }

    public function show($id)
    {
        if(!$perfis = Perfil::find($id)) abort(501,'Usuário não encontrado!');
        return response()->json($perfis,201);
    }

    public function update($id, Request $request)
    {
        $perfis = Perfil::find($id);
        if(!$perfis) abort(501,'Usuário não encontrado!');
        $oper = $perfis->update($request->all());
        if(!$oper) abort(501,'Falha na atualização do registro');
        return response()->json([],201);
    }

    public function destroy($id)
    {
        $perfis = Perfil::find($id);
        $oper = $perfis->delete();
        if(!$oper) abort(501,'Falha na remoção do registro');
        return response()->json([],201);
    }
}
