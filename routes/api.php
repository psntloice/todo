<?php


// routes/api.php

use App\Http\Controllers\TodoController;
//ADDED
use App\Http\Controllers\AuthController;


Route::resource('todos', TodoController::class);
Route::get('/todos', [TodoController::class, 'index']);
Route::get('/todos/{id}', [TodoController::class, 'show']);
Route::post('/todos', [TodoController::class, 'store']);
Route::put('/todos/{id}', [TodoController::class, 'update']);
Route::delete('/todos/{id}', [TodoController::class, 'destroy']);

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// Protect the logout route with Sanctum's auth middleware
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);