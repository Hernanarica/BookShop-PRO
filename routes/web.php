<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
	return view('sections.home');
})->name('home');

Route::controller(RegisterController::class)->prefix('/register')->group(function () {
	Route::get('/create', 'create')->name('register.create');
	Route::post('', 'store')->name('register.store');
});

Route::controller(LoginController::class)->prefix('/login')->group(function () {
	Route::get('', 'index')->name('login.index');
	Route::post('', 'store')->name('login.store');
});

Route::controller(UserController::class)->middleware('auth')->prefix('/users')->group(function () {
	Route::get('/{user:name}', 'show')->name('user.show');
});

Route::post('/logout', [LogoutController::class, 'index'])->name('logout.index');