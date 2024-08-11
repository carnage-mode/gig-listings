<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;

// All listings
Route::get('/', function () {
    return view('listings', [
        'listings' => Listing::all(),
    ]);
});

Route::get('/listings/{listing}', function(Listing $listing) {
    return view('listing', [
        'listing' => $listing,
    ]);
});
