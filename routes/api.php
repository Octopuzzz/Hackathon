<?php

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\TransactionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('/transaction', TransactionController::class)->except('edit');
Route::post('/register', [LoginController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/auth/category', [CategoryController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::resource('/auth/forums', ForumController::class)->except('edit');
// Route::get('/auth/forums/{id}/posts', [ForumController::class, 'show']);
Route::get('/auth/likes/{id}', [LikesController::class, 'show']);
Route::get('/auth/likes', [LikesController::class, 'index']);
Route::post('/logout', [LoginController::class, 'logout']);
// Route::get('/logout', );
