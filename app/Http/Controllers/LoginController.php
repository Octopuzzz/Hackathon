<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Foreach_;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $request->password = Hash::make($request->password);

        $user = new User(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]
        );
        $user->save();
        $response = [
            'message' => 'User created successfully',
            'user' => $request->all(),
        ];
        return response()->json($response, Response::HTTP_CREATED);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);
        $user =  User::all()->where('email', $request->email);
        foreach ($user as $u) {
            if (Hash::check($request->password, $u->password)) {
                $Token = $u->createToken('MyApp')->plainTextToken;
                $response = [
                    'message' => 'User logged in successfully',
                    'user' => $u,
                ];
                $u->Token = $Token;
                return response()->json($response, Response::HTTP_OK);
            }
        }
        return response()->json(['message' => 'Invalid credentials'], Response::HTTP_UNAUTHORIZED);
    }
}
