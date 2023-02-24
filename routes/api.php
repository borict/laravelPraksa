<?php

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

Route::get('/get', function () {
    return response()->json(['message' => 'get']);
});
Route::post('/post', function () {
    return response()->json(['message' => 'post']);
});
Route::put('/put', function () {
    return response()->json(['message' => 'put']);
});
Route::patch('/patch', function () {
    return response()->json(['message' => 'patch']);
});
Route::delete('/delete', function () {
    return response()->json(['message' => 'delete']);
});
