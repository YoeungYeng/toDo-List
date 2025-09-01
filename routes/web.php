<?php

use App\Http\Controllers\TaskControllerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskControllerController::class, 'index']);
Route::post('/task', [TaskControllerController::class, 'store']);
Route::delete('/task/{id}', [TaskControllerController::class, 'destroy']);
// edit
Route::get('/task/{id}/edit', [TaskControllerController::class, 'edit']);
// update
Route::put('/task/{id}', [TaskControllerController::class, 'update']);