<?php

use App\Http\Controllers\AdminAccountActivationController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminFlashCardController;
use App\Http\Controllers\AdminGenerateQrController;
use App\Http\Controllers\AdminPersonalDetailsController;
use App\Http\Controllers\CreateAccountController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\QRCodeController;
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

Route::middleware(['general'])->group(function () {
    Route::get('/', [WelcomeController::class, 'index'])->middleware('throttle:20,1');
    Route::get('/logout', [LogoutController::class, 'index'])->middleware('throttle:20,1');

    Route::resource("/create", CreateAccountController::class)->middleware('throttle:20,1');
    Route::resource("/login", LoginController::class)->middleware('throttle:20,1');
    Route::resource("/admin_dashboard", AdminDashboardController::class)->middleware('throttle:20,1');
    Route::resource("/activations", AdminAccountActivationController::class)->middleware('throttle:20,1');
    Route::resource("/profiles", AdminPersonalDetailsController::class)->middleware('throttle:20,1');
    Route::resource("/flashcard", AdminFlashCardController::class)->middleware('throttle:20,1');
    Route::resource("/category", AdminCategoryController::class)->middleware('throttle:20,1');
    Route::resource("/generateqr", AdminGenerateQrController::class)->middleware('throttle:20,1');
});


Route::get('/generate-qrcode/{flashCardID}', [QRCodeController::class, 'generateQRCode'])->name('generate.qrcode');
