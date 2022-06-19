<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::get();
        return response()->json([
            'message' => 'List of posts',
            'data' => $posts
        ], Response::HTTP_OK);
    }
}
