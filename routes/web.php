<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tests', [TestController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{postId}', [PostController::class, 'show']);
// Route::get('/posts/{postId}/edit', [PostController::class, 'edit']);
Route::get('/comments', [CommentController::class, 'comments']);
Route::get('/posts/{postId}/comments', [CommentController::class, 'index']);
Route::get('/posts/{postId}/comments/{commentId}', [CommentController::class, 'show']);
Route::get('/commands', function() {
    Artisan::call('hello:class', [
        '--switch' => true,
    ]);
});
