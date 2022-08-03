<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

// Human resource routes
Route::get('/', [HumanResourceController::class, 'index'])->name('employees');
Route::get('/add-user', [HumanResourceController::class, 'create'])->name('add-user');
Route::post('/create-user', [HumanResourceController::class, 'store'])->name('create-user');   
Route::post('/upload-users', [HumanResourceController::class, 'uploadUsersFile'])->name('upload-users');  

Route::get('/view-user/{uuid}', [HumanResourceController::class, 'show'])->name('view-user');  
Route::get('/edit-user/{uuid}', [HumanResourceController::class, 'edit'])->name('edit-user');  
Route::get('/delete-user/{uuid}', [HumanResourceController::class, 'deleteUser'])->name('delete-user');  
Route::post('/update-user', [HumanResourceController::class, 'updateUser'])->name('update-user'); 