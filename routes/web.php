<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PostController;

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
