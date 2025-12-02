<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/', function () {
    return response()->json(['message' => 'API HAS RUNNN!!!']);
});

Route::post('login', [AuthController::class, 'actionLogin'])->name('login');
Route::get('me', [AuthController::class, 'me']);