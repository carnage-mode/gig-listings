<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;

// All listings
Route::get('/', [ListingController::class, 'index']);

// Show create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Store listing data
Route::post('/listings/', [ListingController::class, 'store'])->middleware('auth');

// Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Show user registration page
Route::get('/register', [UserController::class, 'create']);

// Store user details
Route::post('/users/', [UserController::class, 'store']);

// Show login form
Route::get('/login/', [UserController::class, 'login'])->name('login');

// Authenticate and login
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
