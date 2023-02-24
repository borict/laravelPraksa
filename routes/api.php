<?php

use App\Http\Controllers\HomeController;
use App\Http\Middleware\CheckAge;
use Illuminate\Http\Request;
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


Route::get('/get', [HomeController::class, 'index'])
    ->middleware('check.age');
Route::post('/post', [HomeController::class, 'store']);
Route::put('/put', [HomeController::class, 'update']);
Route::patch('/patch', [HomeController::class, 'update']);
Route::delete('/delete', [HomeController::class, 'destroy']);
