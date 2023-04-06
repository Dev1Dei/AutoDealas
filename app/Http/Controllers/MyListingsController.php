<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MyListingsController extends Controller
{
    public function index(Request $request)
    {
        $listings = Listing::where('user_id', $request->user()->id)->get();
        return Inertia::render('MyListings', ['listings' => $listings]);
    }
}
