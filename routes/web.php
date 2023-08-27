<?php

use App\Http\Controllers\KebabController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Kebab assiocated routes
Route::get('/', [KebabController::class, 'index'])->name('home.page');
Route::get('/meniu', [KebabController::class, 'meniu'])->name('meniu.page');

// User assiocated routes
Route::get('/register', [UserController::class, 'showRegister'])->name('show.register');
Route::post('/register', [UserController::class, 'postRegister'])->name('post.register');
Route::get('/login', [UserController::class, 'login']);
