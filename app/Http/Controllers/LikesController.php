<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;

class LikesController extends Controller
{
    public function show($id)
    {
        $post = Like::find($id)->first();
        $response = [
            'message' => 'List of likes',
            'data' => $post
        ];
        return response()->json($response, Response::HTTP_OK);
    }
    public function index()
    {
        $likes = Like::all();
        $response = [
            'message' => 'List of likes',
            'data' => $likes
        ];
        return response()->json($response, Response::HTTP_OK);
    }
}
