<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

// Auth routes
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'userLogin'])->name('user-login');
Route::get('/forget-password', [AuthController::class, 'forgetPassword'])->name('forget-password');  
Route::post('/update-password', [AuthController::class, 'updatePassword'])->name('update-password'); 
Route::get('/logout', [AuthController::class, 'logout'])->name('logout'); 
