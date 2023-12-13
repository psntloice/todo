<?php


// routes/api.php

use App\Http\Controllers\TodoController;
//ADDED
use App\Http\Controllers\AuthController;
Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');

Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::post('/todos', [TodoController::class, 'store']);
    Route::get('/todos/{todo}', [TodoController::class, 'show']);
    Route::put('/todos/{todo}', [TodoController::class, 'update']);
   // Route::delete('/todos/{todo}', [TodoController::class, 'destroy']);
    Route::post('/todos/deletetd', [TodoController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
});


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// Protect the logout route with Sanctum's auth middleware
//Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);
