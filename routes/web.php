<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KebabController;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\UserAuthController;
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
Route::get('/', [KebabController::class, 'index'])->name('home_page');
Route::get('/meniu', [KebabController::class, 'meniu'])->name('meniu_page');

// User assiocated routes
Route::get('/register', [RegisterController::class, 'showRegister'])->name('show_register');
Route::post('/register', [RegisterController::class, 'postRegister'])->name('post_register');
Route::get('/login', [UserAuthController::class, 'showLogin'])->name('login');
Route::post('/login', [UserAuthController::class, 'postLogin'])->name('post_login');
Route::post('/logout', [UserAuthController::class, 'logout'])->name('logout');
Route::get('/myprofile', [MyProfileController::class, 'index'])->middleware('verified')->name('my_profile');
Route::get('/verify', [MyProfileController::class, 'verify'])->middleware(['auth'])->name('verification.notice');
Route::get('/resend/verification/email', [MyProfileController::class, 'resendEmail'])->name('resend.email');
Route::get('/email/verify/{id}/{hash}', [MyProfileController::class, 'emailVerificationReq'])->middleware(['auth', 'signed'])->name('verification.verify');

// Cart assiocated routes
Route::get('cart', [ShoppingCartController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ShoppingCartController::class, 'addToCart'])->name('add_to_cart');
Route::delete('remove-from-cart', [ShoppingCartController::class, 'removeFromCart'])->name('remove_from_cart');
Route::patch('update-cart', [ShoppingCartController::class, 'updateCartQuantity'])->name('update_cart');

// Payment assiocated routes
Route::post('/session', [StripeController::class, 'session'])->middleware(['verified'])->name('session');
Route::get('/success', [StripeController::class, 'paymentSuccess'])->name('success');
Route::get('/cancel', [StripeController::class, 'paymentCancel'])->name('cancel');
