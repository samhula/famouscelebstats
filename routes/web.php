<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerArticle;
use App\Http\Controllers\ControllerSearch;
use App\Http\Controllers\ControllerUser;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ControllerArticle::class, 'index']);

Route::get('/categories', function() {
    return view('categories');
});

Route::get('/create', [ControllerArticle::class, 'create'])->middleware('auth');
Route::post('/create', [ControllerArticle::class, 'store']);

Route::get('/search', [ControllerSearch::class, 'index']);

// Route::get('/celebrity/{slug}', [ControllerArticle::class, 'show']);

Route::get('/article/{article:slug}', [ControllerArticle::class, 'show']);

// Register, Sign in and Sign out
Route::get('/register', [ControllerUser::class, 'create'])->middleware('guest');
Route::post('/users', [ControllerUser::class, 'store']);
Route::get('login', [ControllerUser::class, 'login'])->name('login')->middleware('guest');
Route::post('users/authenticate', [ControllerUser::class, 'authenticate']);
Route::post('/logout', [ControllerUser::class, 'logout'])->middleware('auth');