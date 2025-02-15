<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NFeController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/nfe/{keyAccess}', [NFeController::class, 'getNFe']);

Route::middleware('auth:sanctum')->group(function () {
    //Route::get('/nfe/{chaveAcesso}', [NFeController::class, 'getNFe']);
});
