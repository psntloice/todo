<?php


// routes/api.php

use App\Http\Controllers\TodoController;
//ADDED
use App\Http\Controllers\AuthController;
Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');

Route::group(['middleware' => ['auth:sanctum']], function(){
   // Route::get('/todos/create', [TodoController::class, 'create'])->name('todos.create');
    Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');
    Route::get('/todos/{todo}', [TodoController::class, 'show'])->name('todos.show');
    Route::get('/todos/{todo}/edit', [TodoController::class, 'edit'])->name('todos.edit');
    Route::put('/todos/{todo}', [TodoController::class, 'update'])->name('todos.update');
    Route::delete('/todos/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');
    Route::post('/logout', [AuthController::class, 'logout']);
});


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// Protect the logout route with Sanctum's auth middleware
//Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);
