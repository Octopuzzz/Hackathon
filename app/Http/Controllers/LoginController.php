<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        return response()->json([
            'message' => 'Login Successfully',
            'token' => '123456789',
            'data' => $request->all(),
        ], Response::HTTP_OK);
    }
}
