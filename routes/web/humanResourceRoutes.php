<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HumanResource\HumanResourceController;

// Human resource routes
Route::get('/employees', [HumanResourceController::class, 'index'])->name('employees');
Route::get('/add-user', [HumanResourceController::class, 'create'])->name('add-user');
Route::post('/create-user', [HumanResourceController::class, 'store'])->name('create-user');   
Route::post('/upload-users', [HumanResourceController::class, 'uploadUsersFile'])->name('upload-users');  
Route::get('/view-user/{uuid}', [HumanResourceController::class, 'show'])->name('view-user');  
Route::get('/edit-user/{uuid}', [HumanResourceController::class, 'edit'])->name('edit-user');  
Route::get('/delete-user/{uuid}', [HumanResourceController::class, 'deleteUser'])->name('delete-user');  
Route::post('/update-user', [HumanResourceController::class, 'updateUser'])->name('update-user'); 


// Staff leave
Route::get('/staff-leave', [HumanResourceController::class, 'leave'])->name('leaves');
Route::get('/create-leave', [HumanResourceController::class, 'createLeave'])->name('create-leave'); 
Route::get('/edit-leave/{uuid}', [HumanResourceController::class, 'editLeave'])->name('edit-leave');  
Route::get('/delete-leave/{uuid}', [HumanResourceController::class, 'deleteLeave'])->name('delete-leve');  
Route::post('/update-leave', [HumanResourceController::class, 'updateLeave'])->name('update-leave'); 

// Holidays & events

Route::get('/holidays', [HumanResourceController::class, 'holidays'])->name('holidays');


