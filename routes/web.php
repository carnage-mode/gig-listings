<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;

// All listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest listings' ,
        'listings' => Listing::all(),
    ]);
});

Route::get('/listings/{id}', function($id) {
    return view('listing', [
        'listing' => Listing::find($id),
    ]);
});
