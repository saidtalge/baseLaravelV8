<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
        return response()->json($users,201);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $oper = User::create($input);
        if(!$oper) abort(501,'Falha na inserção do registro');
        return response()->json([],201);
    }

    public function show($id)
    {
        if(!$user = User::find($id)) abort(501,'Usuário não encontrado!');
        return response()->json($user,201);
    }

    public function update($id, Request $request)
    {
        $user = User::find($id);
        if(!$user) abort(501,'Usuário não encontrado!');
        $oper = $user->update($request->all());
        if(!$oper) abort(501,'Falha na atualização do registro');
        return response()->json([],201);
    }

    public function delete($id, Request $request)
    {
        $user = User::find($id);
        $oper = $user->update(['deleted_at' => now()]);
        if(!$oper) abort(501,'Falha na remoção do registro');
        return response()->json([],201);
    }
}
