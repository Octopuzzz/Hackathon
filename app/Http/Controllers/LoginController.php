<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
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
        $user =  User::where('email', $request->emai)->first();
        return response()->json([$user, $request->all()], Response::HTTP_OK);
    }
}
