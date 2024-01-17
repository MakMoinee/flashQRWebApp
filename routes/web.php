<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CreateAccountController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/logout', [LogoutController::class, 'index']);

Route::resource("/create", CreateAccountController::class);
Route::resource("/login", LoginController::class);
Route::resource("/admin_dashboard", AdminDashboardController::class);
