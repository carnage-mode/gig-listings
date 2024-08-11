<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;

use App\Http\Controllers\ListingController;

// All listings
Route::get('/', [ListingController::class, 'index']);

Route::get('/listings/{listing}', [ListingController::class, 'show']);
