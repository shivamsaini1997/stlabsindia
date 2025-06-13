<?php
use App\Http\Controllers\admin\LoginController as AdminLoginController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Route;

// admin routes
Route::group(['prefix' => 'admin'], function() {
     Route::group(['middleware' => 'admin.guest'], function() {
        Route::get('login', [AdminLoginController::class, 'index'])->name('admin.login');
        Route::post('authLogin', [AdminLoginController::class, 'authLogin'])->name('admin.authLogin');
    });
     Route::group(['middleware' => 'admin.auth'], function() {
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('register', [AdminLoginController::class, 'register'])->name('admin.register');
        Route::post('register', [AdminLoginController::class, 'adminRegister'])->name('admin-register');
        Route::get('register/delete/{id}', [AdminLoginController::class, 'deleteRegister'])->name('delete-register');
        Route::get('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
     });
});



// Frontend routes
        Route::get('/', [HomeController::class, 'index'])->name('homepage');
