<?php

use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\ManageAdminController;
use App\Http\Middleware\ValidAdmin;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function () {

    Route::view('/admin_login_form', 'admin_login')->name('admin_login_form');
    Route::view('/forgot_password', 'forgot_password')->name('forgot_password');
    Route::view('/admin_register_form', 'admin_register')->name('admin_register_form');

    Route::post('/admin_login', [LoginAdminController::class, 'adminLoginCredentialsMatch'])->name('login_match');
    Route::post('/insert_admin_register', [ManageAdminController::class, 'admin_register'])->name('insert_admin_register');

    // Middlaweare apply
    Route::middleware(['admin.auth'])->group(function () {

        Route::view('/dashboard', 'dashboard')->name('dashboard');
        Route::view('/buttons', 'buttons')->name('buttons');
        Route::view('/cards', 'cards')->name('cards');
        Route::view('/utilities-color', 'utilities-color')->name('utilities-color');
        Route::view('/utilities-border', 'utilities-border')->name('utilities-border');
        Route::view('/utilities-animation', 'utilities-animation')->name('utilities-animation');
        Route::view('/utilities-other', 'utilities-other')->name('utilities-other');
        Route::view('/404', '404')->name('404');
        Route::view('/blank', 'blank')->name('blank');
        Route::view('/charts', 'charts')->name('charts');
        Route::view('/tables', 'tables')->name('tables');
    });
});
