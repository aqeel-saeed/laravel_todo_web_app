<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Show all tasks
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');

// Show the form for creating a new task
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');

// Store a newly created task in storage
Route::post('/tasks', [TaskController::class,'store'])->name('tasks.store');

// Show a specific task
Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');

// Show the form for editing a specific task
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');

// Update a specific task in storage
Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');

// Remove a specific task from storage
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
