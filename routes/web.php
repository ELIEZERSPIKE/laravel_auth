<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;


Route::get('/', [PostController::class, 'spike'])->name('login');

Route::get('/login',[PostController::class, 'login'])->name('login');

Route::get('/registration',[PostController::class, 'registration'])->name('registration');

Route::get('/logout', [PostController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [PostController::class, 'dashboard'])->name('dashboard');
}) ;


Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/registration', [AuthController::class, 'registration'])->name('registration.process');

