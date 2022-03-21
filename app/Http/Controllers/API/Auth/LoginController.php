<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request )
    {
        $credentials = $request->only('email','password');

        if(!auth()->attempt($credentials)) return false;

        $user = auth()->user();
        $token = $user->createToken('User'.$user->id)->accessToken;
        return response()->json([
            'data' => [
                'token' => $token
            ],
        ]);
    }

    public function register(Request $request, User $user)
    {
        $validation = $request->validate(
            [
                'name' => 'required',
                'email' => 'required|unique:users',
                'password' => 'required'
            ],
        );
        $input = $request->only('name','email','password');
        $input['password'] = bcrypt($input['password']);
        if(!$user = $user->create($input)) abort(500,'Ocorreu um erro ao registrar um usuário!');
        return response()->json([],201);

    }

    public function logout()
    {
        auth()->user()->currentAccessToken()->delete();
    }
}
