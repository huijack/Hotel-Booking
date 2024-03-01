<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

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

Route::get('/', function() {
    return view('welcome');
});

Route::get('/login', [HotelController::class, 'login'])->name('login');
Route::post('/login', [HotelController::class, 'loginPost'])->name('login.post');

Route::get('/register', [HotelController::class, 'register'])->name('register');
Route::post('/register', [HotelController::class, 'registerPost'])->name('register.post');

Route::get('/home', [HotelController::class, 'index'])->name('home');
Route::delete('/logout', [HotelController::class, 'logout'])->name('logout');

Route::get('/rooms', [HotelController::class, 'rooms'])->name('rooms');

Route::get('/checkout/{room_type}', [HotelController::class, 'checkout'])->name('checkout');
