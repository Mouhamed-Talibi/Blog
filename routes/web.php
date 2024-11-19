<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/login', [UserController::class, 'loginAction'])->name('users.login');
Route::get('/register', [UserController::class, 'registerAction'])->name('users.register');
Route::post('/logout', [UserController::class, 'logoutAction'])->name('users.logout');
// store : 
Route::post('/users', [UserController::class, 'storeUserAction'])->name('users.store');
Route::post('/login', [UserController::class, 'handleLogin'])->name('users.accessLogin');
// posts 
Route::get('/posts/dashboard', [UserController::class, 'dashboardAction'])->middleware('auth')->name('posts.dashboard');

// posts
Route::get('/posts/create', [PostController::class, 'createAction'])->name('posts.create');
Route::post('/posts', [PostController::class, 'storeAction'])->name('posts.store');
Route::get('/posts', [PostController::class, 'myPostsAction'])->name('posts.myPosts');
Route::get('/posts/all', [PostController::class, 'allPostsAction'])->name('posts.allPosts');
Route::get('/posts/{post}', [PostController::class, 'showAction'])->name('posts.show');
