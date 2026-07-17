<?php

use App\Http\Controllers\StepController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/ideas');

Route::middleware('auth')->group(function () {
    Route::resource('/ideas', IdeaController::class);
    Route::delete('/logout', [SessionsController::class, 'destroy']);
    Route::patch('/steps/{step}', [StepController::class, 'update']);
});

// The only allowed routes for a user who isnt authenticated
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/login', [SessionsController::class, 'store']);
});
