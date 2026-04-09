<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthApiController;

Route::prefix('auth')->group(function () {
    Route::post('/login', [AuthApiController::class, 'login'])->name('api.login');
    Route::post('/register', [AuthApiController::class, 'register'])->name('api.register');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthApiController::class, 'logout'])->name('api.logout');
});