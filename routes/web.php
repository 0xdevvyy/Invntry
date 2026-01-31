<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;




Route::get('/', [SessionController::class, 'login']);
Route::post('/', [SessionController::class, 'store']);


Route::middleware('auth')->group(function(){
    Route::get('/register', [RegisteredUserController::class, 'register']);
    Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::get('/dashboard', [DashboardController::class, 'index']);
});