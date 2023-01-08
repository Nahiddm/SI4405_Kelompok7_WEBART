<?php

use App\Http\Controllers\Auction\AuctionController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Bid\BidController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Profile\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::redirect('/home', '/');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/about', [HomeController::class, 'about'])->name('about')->middleware('auth');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact')->middleware('auth');

// auth
Route::get('/login', [AuthController::class, 'loginView'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.action');
Route::get('/register', [AuthController::class, 'registerView'])->name('register.view');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

//profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'view_updateProfile'])->name('profile.edit');
    Route::get('/profile/password', [ProfileController::class, 'view_updatePassword'])->name('profile.edit.password');
    Route::put('/profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');
    Route::put('/profile/password/update', [ProfileController::class, 'updatePassword'])->name('profile.update.password');
});

//other
Route::resource('products', ProductController::class)->middleware('auth');
Route::resource('categories', CategoryController::class)->middleware('auth');
Route::get('auction', [AuctionController::class, 'index'])->name('auction');

//bid
Route::get('/bid/{product_id}', [BidController::class, 'listBid'])->name('listBid');
Route::post('/bids/{product_id}', [BidController::class, 'bid'])->middleware('auth')->name('bid');

// Save winner
Route::post('save_winner/{id}', [BidController::class, 'save_winner'])->name('save_winner');
