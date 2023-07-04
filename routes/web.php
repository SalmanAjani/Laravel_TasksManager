<?php

use App\Models\Task;
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

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
// Route::get('/tasks/search', [TaskController::class, 'search'])->name('tasks.search');

Route::get('/tasks/{task}', [TaskController::class, 'show']);
