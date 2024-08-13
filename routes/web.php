<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;

// All listings
Route::get('/', [ListingController::class, 'index']);

// Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show user registration page
Route::get('/register', [UserController::class, 'create']);

// Store user details
Route::post('/users/', [UserController::class, 'store']);

// Show login form
Route::get('/login/', [UserController::class, 'login'])->name('login');

// Authenticate and login
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::middleware(['auth'])->group(function() {
    // Show create form
    Route::get('/listings/create', [ListingController::class, 'create']);

    // Store listing data
    Route::post('/listings/', [ListingController::class, 'store']);

    // Show edit form
    Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

    // Update listing
    Route::put('/listings/{listing}', [ListingController::class, 'update']);

    // Delete listing
    Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

    // Logout
    Route::post('/logout', [UserController::class, 'logout']);
});
