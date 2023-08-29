<?php

use App\Http\Controllers\UserAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KebabController;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StripeController;

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
Route::get('/myprofile', [MyProfileController::class, 'index'])->middleware('verified')->name('myprofile');
Route::get('/verify', [MyProfileController::class, 'verify'])->name('verification.notice')->middleware(['auth']);
Route::get('/resend/verification/email', [MyProfileController::class, 'resend'])->name('resend.email');
Route::get('/email/verify/{id}/{hash}', [MyProfileController::class, 'emailVerificationReq'])->middleware(['auth', 'signed'])->name('verification.verify');

// Cart assiocated routes
Route::get('cart', [KebabController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [KebabController::class, 'addToCart'])->name('add_to_cart');
Route::delete('remove-from-cart', [KebabController::class, 'remove'])->name('remove_from_cart');
Route::patch('update-cart', [KebabController::class, 'update'])->name('update_cart');

// Payment assiocated routes
Route::post('/session', [StripeController::class, 'session'])->name('session')->middleware(['verified']);
Route::get('/success', [StripeController::class, 'success'])->name('success');
Route::get('/cancel', [StripeController::class, 'cancel'])->name('cancel');
