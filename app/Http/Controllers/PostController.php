<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = DB::table('posts')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->get();
        return response()->json([
            'message' => 'List of posts',
            'data' => $posts
        ], Response::HTTP_OK);
    }
}
