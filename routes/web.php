<?php

use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\ManageAdminController;
use App\Http\Middleware\ValidAdmin;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function () {

    Route::view('/login-form', 'admin/login')->name('login.form');
    Route::view('/forgotPassword', 'admin/forgotPassword')->name('forgot.password');
    Route::view('/register-form', 'admin/register')->name('register.form');

    Route::post('/login-match', [LoginAdminController::class, 'adminLoginCredentialsMatch'])->name('login.match');
    Route::post('/admin-registered', [ManageAdminController::class, 'adminRegistered'])->name('admin.register');

    // Middlaweare apply
    Route::middleware(['admin.auth'])->group(function () {

        Route::view('/dashboard', 'admin/dashboard')->name('dashboard');
        Route::view('/buttons', 'admin/buttons')->name('buttons');
        Route::view('/cards', 'admin/cards')->name('cards');
        Route::view('/utilities-color', 'admin/utilitiesColor')->name('utilities.color');
        Route::view('/utilities-border', 'admin/utilitiesBorder')->name('utilities.border');
        Route::view('/utilities-animation', 'admin/utilitiesAnimation')->name('utilities.animation');
        Route::view('/utilities-other', 'admin/utilitiesOther')->name('utilities.other');
        Route::view('/404', 'admin/404')->name('404');
        Route::view('/blank', 'admin/blank')->name('blank');
        Route::view('/charts', 'admin/charts')->name('charts');
        Route::view('/tables', 'admin/tables')->name('tables');
    });
});
