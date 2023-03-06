<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
// use App\Http\Middleware\CheckAge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\JwtMiddleware;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;

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

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::controller(AuthController::class)->group(function () {
        Route::post('login', 'login')->name('login')->withoutMiddleware(["auth.jwt"]);
        Route::post('register', 'register')->name('register')->withoutMiddleware(["auth.jwt"]);
        Route::post('logout', 'logout');
        Route::post('refresh', 'refresh');
    });

    Route::controller(PostController::class)->group(function () {
        Route::get('posts', 'index')->name('all-posts');
        Route::get('posts/{id}', 'show')->name('single-post');
        Route::post('create', 'store')->name('add-post');
        Route::put('posts/{id}', 'update')->name('edit-post');
        Route::delete('posts/{id}', 'destroy')->name('delete-post');
    });

    Route::get('open', [DataController::class, 'open']);
    Route::get('closed', [DataController::class, 'closed'])->middleware(["auth.jwt"]);
});
