<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('api')->group(function () {
    Route::get('/students', [\App\Http\Controllers\StudentController::class, 'index']);
    Route::post('/students', [\App\Http\Controllers\StudentController::class, 'store']);
    Route::get('/students/{id}', [\App\Http\Controllers\StudentController::class, 'show']);
    Route::put('/students/{id}', [\App\Http\Controllers\StudentController::class, 'update']);
    Route::delete('/students/{id}', [\App\Http\Controllers\StudentController::class, 'destroy']);
});