<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\Listing;

class ListingController extends Controller
{
    public function index(): View {
        return view('listings.index', [
            'listings' => Listing::all(),
        ]);
    }

    public function show(Listing $listing): View {
        return view('listings.show', [
            'listing' => $listing,
        ]);
    }
}
