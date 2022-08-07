<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Settings\SettingController;

// Setting auth
Route::get('/settings', [SettingController::class, 'index'])->name('settings');

// leave settings
Route::get('/leave', [SettingController::class, 'employeeLeave'])->name('leave-setting');
Route::post('/create-leave', [SettingController::class, 'createEmployeeLeave'])->name('create-leave-setting');
Route::get('/edit-leave-setting', [SettingController::class, 'editEmployeeLeave'])->name('edit-leave-setting');  
