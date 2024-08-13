<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;

// All listings
Route::get('/', [ListingController::class, 'index']);

// Show create form
Route::get('/listings/create', [ListingController::class, 'create']);

// Store listing data
Route::post('/listings/', [ListingController::class, 'store']);

// Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// Show user registration page
Route::get('/register', [UserController::class, 'create']);

// Store user details
Route::post('/users/', [UserController::class, 'store']);
