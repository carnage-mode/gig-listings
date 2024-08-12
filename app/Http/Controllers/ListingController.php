<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\Listing;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;

class ListingController extends Controller
{
    public function index(): View {
        return view('listings.index', [
            'listings' => Listing::latest()
                ->filter(request(['tag', 'search']))
                ->paginate(6),
        ]);
    }

    public function show(Listing $listing): View {
        return view('listings.show', [
            'listing' => $listing,
        ]);
    }

    public function create(): View {
        return view('listings.create');
    }

    public function store(Request $request): RedirectResponse {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
            'logo' => File::types(['jpg', 'png', 'svg'])->max(1024),
        ]);

        if ($validator->fails()) {
            return redirect('listings/create')
                ->withErrors($validator)
                ->withInput();
        }

        $formFields = $validator->validated();

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');
    }
}
