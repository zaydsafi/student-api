<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

Route::POST('/register', [UserController::class, 'register'])->name('register');

Route::POST('/login', [UserController::class, 'login'])->name('login');

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('/students', StudentController::class);
    Route::apiResource('/user', UserController::class);
    Route::get('/students/search/{city}', [StudentController::class, 'search'])->name('search');
    Route::POST('/logout', [UserController::class, 'logout'])->name('logout');
});
