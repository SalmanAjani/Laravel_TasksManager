<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  

// All tasks
Route::get('/', [TaskController::class, 'index'])->name('tasks.index');

// Show task form
Route::get('/tasks/create', [TaskController::class, 'create']);

// Add task
Route::post('/tasks', [TaskController::class, 'store']);

// Show edit form
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit']);

// Update task
Route::put('/tasks/{task}', [TaskController::class, 'update']);

// Delete task
Route::delete('/tasks/{task}', [TaskController::class, 'delete']);

// Single task
Route::get('/tasks/{task}', [TaskController::class, 'show']);
