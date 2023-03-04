<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    public function index()
{
    $listings = Listing::select('id','title','Type','model','year','engine','fuelType','transmition','city','price')->get();
    return Inertia::render('Listings', ['listings' => $listings]);

}
    public function show($id){
        $listing = Listing::findOrFail($id);
        return Inertia::render('Listing', ['listing' => $listing]);
    }
}
