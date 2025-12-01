<?php

use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\ManageAdminController;
use App\Http\Middleware\ValidAdmin;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function () {

    Route::view('/admin_login_form', 'admin/admin_login')->name('admin_login_form');
    Route::view('/forgot_password', 'admin/forgot_password')->name('forgot_password');
    Route::view('/admin_register_form', 'admin/admin_register')->name('admin_register_form');

    Route::post('/admin_login', [LoginAdminController::class, 'adminLoginCredentialsMatch'])->name('login_match');
    Route::post('/insert_admin_register', [ManageAdminController::class, 'admin_register'])->name('insert_admin_register');

    // Middlaweare apply
    Route::middleware(['admin.auth'])->group(function () {

        Route::view('/dashboard', 'admin/dashboard')->name('dashboard');
        Route::view('/buttons', 'admin/buttons')->name('buttons');
        Route::view('/cards', 'admin/cards')->name('cards');
        Route::view('/utilities_color', 'admin/utilities_color')->name('utilities_color');
        Route::view('/utilities_border', 'admin/utilities_border')->name('utilities_border');
        Route::view('/utilities_animation', 'admin/utilities_animation')->name('utilities_animation');
        Route::view('/utilities_other', 'admin/utilities_other')->name('utilities_other');
        Route::view('/404', 'admin/404')->name('404');
        Route::view('/blank', 'admin/blank')->name('blank');
        Route::view('/charts', 'admin/charts')->name('charts');
        Route::view('/tables', 'admin/tables')->name('tables');
    });
});
