<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminAccountActivationController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminFlashCardController;
use App\Http\Controllers\AdminGenerateQrController;
use App\Http\Controllers\AdminHistoryRecordsController;
use App\Http\Controllers\AdminPasswordController;
use App\Http\Controllers\AdminPersonalDetailsController;
use App\Http\Controllers\AdminQuizController;
use App\Http\Controllers\AdminScanController;
use App\Http\Controllers\AdminUserRecordsController;
use App\Http\Controllers\CreateAccountController;
use App\Http\Controllers\HistoryRecordsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\QRCodeController;
use App\Http\Controllers\SampleQrController;
use App\Http\Controllers\StudentQuizController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\UserPasswordController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\UserRecordsController;
use App\Http\Controllers\UserScanQRController;
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
    Route::resource("/student_dashboard", UserDashboardController::class)->middleware('throttle:20,1');
    Route::resource("/activations", AdminAccountActivationController::class)->middleware('throttle:20,1');
    Route::resource("/profiles", AdminPersonalDetailsController::class)->middleware('throttle:20,1');
    Route::resource("/flashcard", AdminFlashCardController::class)->middleware('throttle:20,1');
    Route::resource("/category", AdminCategoryController::class)->middleware('throttle:20,1');
    Route::resource("/generateqr", AdminGenerateQrController::class)->middleware('throttle:20,1');
    Route::resource("/quiz", AdminQuizController::class)->middleware('throttle:20,1');
    Route::resource("/scanqr", AdminScanController::class)->middleware('throttle:20,1');
    Route::resource("/user_records", AdminUserRecordsController::class)->middleware('throttle:20,1');
    Route::resource("/history", AdminHistoryRecordsController::class)->middleware('throttle:20,1');
    Route::resource("/my_profile", UserProfileController::class)->middleware('throttle:20,1');
    Route::resource("/student_quiz", StudentQuizController::class)->middleware('throttle:20,1');
    Route::resource("/my_history", HistoryRecordsController::class)->middleware('throttle:20,1');
    Route::resource("/my_records", UserRecordsController::class)->middleware('throttle:20,1');
    Route::resource("/my_password", UserPasswordController::class)->middleware('throttle:20,1');
    Route::resource("/passwords", AdminPasswordController::class)->middleware('throttle:20,1');
    Route::get('/privacy_policy', [PrivacyPolicyController::class, 'index'])->middleware('throttle:20,1');
    Route::get('/about', [AboutController::class, 'index'])->middleware('throttle:20,1');
});

Route::resource("/user_scanqr", UserScanQRController::class)->middleware('throttle:20,1');
Route::resource("/this/qr", SampleQrController::class);

Route::get('/generate-qrcode/{flashCardID}', [QRCodeController::class, 'generateQRCode'])->name('generate.qrcode');

Route::fallback(function () {
    return view('errors.error404');
});
