<?php

use App\Http\Controllers\UserAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KebabController;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\RegisterController;

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
Route::get('/register', [RegisterController::class, 'showRegister'])->name('show.register');
Route::post('/register', [RegisterController::class, 'postRegister'])->name('post.register');
Route::get('/login', [UserAuthController::class, 'showLogin'])->name('login');
Route::post('/login', [UserAuthController::class, 'postLogin'])->name('post.login');
Route::post('/logout', [UserAuthController::class, 'logout'])->name('logout');
Route::get('/myprofile', [MyProfileController::class, 'index'])->name('myprofile')->middleware('auth');
