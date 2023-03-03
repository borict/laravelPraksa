<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
// use App\Http\Middleware\CheckAge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('/get', [HomeController::class, 'index'])
//     ->middleware('check.age');
// Route::post('/post', [HomeController::class, 'store']);
// Route::put('/put', [HomeController::class, 'update']);
// Route::patch('/patch', [HomeController::class, 'update']);
// Route::delete('/delete', [HomeController::class, 'destroy']);

// Route::get('/posts', [PostController::class, 'index'])->name('all-posts');
// Route::get('/posts/{id}', [PostController::class, 'show'])->name('single-post');

// Route::get('/create', [PostController::class, 'create'])->name('create-post-form');
// Route::post('/create', [PostController::class, 'store'])->name('add-post');


// Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('edit-post-form');
// Route::put('/posts/{id}/edit', [PostController::class, 'update'])->name('edit-post');

// Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('delete-post');


// Route::get('/home', [HomeController::class, 'index'])->name('home');


// Auth::routes();
// Auth::routes(['reset' => false]);

// Route::get('/register', [RegisterController::class, 'create'])->name('registration-form');
// Route::post('/register', [RegisterController::class, 'store'])->name('registration');

// Route::get('/login', [LoginController::class, 'loginView'])->name('login-form');
// Route::post('/login', [LoginController::class, 'login'])->name('login');

// // Route::delete('/logout', [LoginController::class, 'destroy'])->name('logout');
// Route::get('/logout', [LoginController::class, 'destroy']);
