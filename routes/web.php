<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\SindicoController;

Route::get('login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('password/update', [PasswordController::class, 'update'])->name('password.update');

Route::post('/update-photo', [AuthController::class, 'updateProfilePhoto'])->middleware('auth');

Route::middleware('auth:sindico')->group(function () {
    Route::get('sindico/profile', [SindicoController::class, 'showProfile'])->name('sindico.profile');
    Route::post('sindico/upload', [SindicoController::class, 'uploadPhoto'])->name('sindico.upload');
});
