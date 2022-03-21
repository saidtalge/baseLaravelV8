<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
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
}
