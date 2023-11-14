<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dash\DashboardController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\post\LengkapiDataController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

Route::get('/', function () {
    $title = "Halaman Bursa Kerja";
    return view('welcome', compact('title'));
});

// Authentication Routes
Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showlogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LogoutController::class, 'logout']);

Route::prefix('forget-password')->group(function () {
    Route::get('/', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('/', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/{token}', [ResetPasswordController::class, 'reset'])->name('password.update');
});

// Dashboard Routes
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Profile Routes
    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index']);
        Route::post('/update', [ProfileController::class, 'update'])->name('profile.update');
        Route::post('/image/update', [ProfileController::class, 'profileImageUpdate'])->name('profile.image.update');
        Route::post('/updatePassword', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');
    });

    // Admin-only Routes
    Route::middleware(['admin'])->group(function () {
        Route::get('/admin-only', function () {
            return 'Hanya Admin yang dapat mengakses ini!';
        });
    });

    // Lengkapi Data Route
    Route::post('/dashboard/users/lengkapi/data', [LengkapiDataController::class, 'postData'])->name('lengkapi-data');
});

// Access Denied Route
Route::get('/dont-have-access', function () {
    $title = "You Dont Have Access";
    return view('errors.access', compact('title'));
});
