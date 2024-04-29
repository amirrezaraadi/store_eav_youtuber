<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
Route::name('auth')->prefix('auth')->group(function () {
    Route::post('register', [\App\Http\Controllers\Auth\RegisteredUserController::class, 'store'])
        ->name('register');
});
