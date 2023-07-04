<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

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
// register - Register User
// login - Login User  

// Home page
Route::view('/', 'home');

// All tasks
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index')->middleware('auth');

// Show add task form
Route::get('/tasks/create', [TaskController::class, 'create'])->middleware('auth');

// Add task
Route::post('/tasks', [TaskController::class, 'store'])->middleware('auth');

// Manage user tasks
// Route::get('/tasks/manage', [TaskController::class, 'manage'])->middleware('auth');

// Show edit form
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->middleware('auth');

// Update task
Route::put('/tasks/{task}', [TaskController::class, 'update'])->middleware('auth');

// Delete task
Route::delete('/tasks/{task}', [TaskController::class, 'delete'])->middleware('auth');

// Get Single task
Route::get('/tasks/{task}', [TaskController::class, 'show']);

// Show register user form
Route::get('/register', [UserController::class, 'register'])->middleware('guest');

// Create new user
Route::post('/users', [UserController::class, 'store']);

// Show login user form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Logout user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
