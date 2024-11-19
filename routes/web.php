<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/login', [UserController::class, 'loginAction'])->name('users.login');
Route::get('/register', [UserController::class, 'registerAction'])->name('users.register');
// store : 
Route::post('/users', [UserController::class, 'storeUserAction'])->name('users.store');
Route::post('/login', [UserController::class, 'handleLogin'])->name('users.accessLogin');
// posts 
Route::get('/posts/dashboard', [UserController::class, 'dashboardAction'])->name('posts.dashboard');
