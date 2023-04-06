<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Listing;
use Illuminate\Support\Facades\Auth;


class ListingController extends Controller
{
    public function index()
{
    $listings = Listing::select('id','title','Type','year','photo', 'engine','fuelType','transmition','city','miles','price','make','model')->get();
    return Inertia::render('Listings', ['listings' => $listings ]);

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
                $query->where('brand_id', $request->input('marke'));
            })
            ->when($request->has('modelis'), function ($query) use ($request) {
                $query->where('car_model_id', $request->input('modelis'));
            })
            ->when($request->has('fuelType'), function ($query) use ($request) {
                $query->where(function ($query) use ($request) {
                    $query
                        ->when($request->has('fuelType'), function ($query) use ($request) {
                            $query->orWhere('fuelType', $request->input('fuelType'));
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

    if ($request->has('sortBy') && $request->input('sortBy') == 'price_asc') {
        $query->orderBy('price', 'asc');
    }
    //dd($query -> toSql());
    $listings = $query->get();


    return Inertia::render('Listings', ['searchResults' => $listings]);
        }

    public function sortByPriceAsc(Request $request)
{
    $listings = Listing::orderBy('price')->get();

    return Inertia::render('Listings', ['listings' => $listings]);
}
public function edit(Request $request, $id)
{
    $listing = Listing::findOrFail($id);
    return Inertia::render('EditListing', [
        'listing' => $listing,
    ]);
}

public function update(Request $request, $id)
{
    $listing = Listing::findOrFail($id);

    $validatedData = $request->validate([
        'description' => 'required',
        'price' => 'required|numeric',
        'miles' => 'required|numeric',
    ]);

    $listing->update($validatedData);

    return redirect()->route('listings.show', $listing->id);
}


public function destroy(Listing $listing)
{
    
    if (Auth::user()->id !== $listing->user_id) {
        abort(403, 'Unauthorized action.');
    }

    $listing->delete();
    $query = Listing::query();
    $listings = $query->get();
    return Inertia::render('Listings', ['listings' => $listings])->with('message', 'Listing deleted successfully.');
}
    }

//     public function search(Request $request)
//     {
//         $query = Listing::query();
        
//         $query->where(function ($query) use ($request) {
//             $query
//                 ->whenFilled('marke', function ($query) use ($request){
//                     $query->where('make', $request->input('marke'));
//                 })
//                 ->whenFilled('modelis', function ($query) use ($request) {
//                     $query->where('model', $request->input('modelis'));
//                 })
//                 ->whenFilled('fuelType', function ($query) use ($request) {
//                    $query->where('fuelType', $request->input('fuelType'));
//                 })
//                 ->whenFilled('body', function ($query) use ($request) {
//                     $query->where('body', $request->input('body'));
//                 })
//                 ->whenFilled('minYear', function ($query) use ($request) {
//                     $query->where('year', '>=', $request->input('minYear'));
//                 })
//                 ->whenFilled('maxYear', function ($query) use ($request) {
//                     $query->where('year', '<=', $request->input('maxYear'));
//                 })
//                 ->whenFilled('minPrice', function ($query) use ($request) {
//                     $query->where('price', '>=', $request->input('minPrice'));
//                 })
//                 ->whenFilled('maxPrice', function ($query) use ($request) {
//                     $query->where('price', '<=', $request->input('maxPrice'));
//                 });
//             }
//         );
        
//         $results = $query->get();
//         return Inertia::render('Listings', ['searchResults' => $results]);
    
//     }
// }