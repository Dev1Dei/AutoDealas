<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    public function index()
{
    $listings = Listing::select('id','title','Type','year','engine','fuelType','transmition','city','price','make','model')->get();
    return Inertia::render('Listings', ['listings' => $listings]);

}
    public function show($id){
        $listing = Listing::findOrFail($id);
        return Inertia::render('Listing', ['listing' => $listing]);
    }

    public function search(Request $request)
    {
        $query = Listing::query();
        
        $query->where(function ($query) use ($request) {
            $query
                ->when($request->has('marke'), function ($query) use ($request) {
                    $query->where('make', $request->input('marke'));
                })
                ->when($request->has('modelis'), function ($query) use ($request) {
                    $query->where('model', $request->input('modelis'));
                })
                ->when($request->has('Benzinas') || $request->has('Elektra') || $request->has('Dyzelinas'), function ($query) use ($request) {
                    $query->where(function ($query) use ($request) {
                        $query
                            ->when($request->has('Benzinas'), function ($query) use ($request) {
                                $query->orWhere('fuelType', $request->input('Benzinas'));
                            })
                            ->when($request->has('Elektra'), function ($query) use ($request) {
                                $query->orWhere('fuelType', $request->input('Elektra'));
                            })
                            ->when($request->has('Dyzelinas'), function ($query) use ($request) {
                                $query->orWhere('fuelType', $request->input('Dyzelinas'));
                            });
                    });
                })
                ->when($request->has('minYear'), function ($query) use ($request) {
                    $query->where('year', '>=', $request->input('minYear'));
                })
                ->when($request->has('maxYear'), function ($query) use ($request) {
                    $query->where('year', '<=', $request->input('maxYear'));
                })
                ->when($request->has('minPrice'), function ($query) use ($request) {
                    $query->where('price', '>=', $request->input('minPrice'));
                })
                ->when($request->has('maxPrice'), function ($query) use ($request) {
                    $query->where('price', '<=', $request->input('maxPrice'));
                });
        });
        
        $results = $query->get();
        
        return Inertia::render('Listings', ['searchResults' => $results]);
    }
}
