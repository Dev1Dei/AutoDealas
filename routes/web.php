<?php


use illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Models\Brand;
use App\Models\CarModel;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// All Listings
// Option A
Route::get('listings', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});
// All Brands
// Option B
Route::get('brands', function () {
    return view('brands', [
        'brands' => Brand::all()
    ]);
});
Route::get('/', ['as' => 'home_path', 'uses' => function (Request $request) {

    // Get all brands
    $brands = Brand::all();

    // If a brand is selected, get the models for that brand
    $models = [];
    $selectedBrand = null;
    if ($request->has('brand')) {
        $selectedBrand = $request->input('brand');
        $brand = Brand::where('title', $selectedBrand)->first();
        if ($brand) {
            $models = CarModel::where('brand_title', $selectedBrand)->get();
        }
    }

    return view('home', compact('brands', 'models', 'selectedBrand'));

}]);
//All Models
// Option C
Route::get('models', function() {
    return view('models', [
        'models' => CarModel::all()
    ]);
});
//Single Listing
// Option D
Route::get('/listings/{id}', function($id){
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});
//Main screen
//Option E

// Moto screen
Route::get('moto', function()
{
    return view('moto');
});


//Count listings by make and update brands table
// Option F
Route::get('/', function () {
    // Get the count of listings for each make and update the brands table
    $countedData = Listing::select('make', DB::raw('count(*) as total'))
        ->groupBy('make')
        ->get();

    foreach ($countedData as $count) {
        Brand::updateOrInsert(
            ['title' => $count->make],
            ['records' => $count->total]
        );
    }
    // Get all brands and models
    $brands = Brand::all();
    $models = CarModel::all();

    // Pass the brands and models to the home view
    return view('home', compact('brands', 'models'));
});

// Option G
Route::get('models/{brand}', function($brand) {
    $models = CarModel::where('brand', $brand)->get();
    return view('models', [
        'models' => $models
    ]);
});
// Option L
Route::get('brands/{id}', function($id) {
    $brand = Brand::findOrFail($id);
    $models = $brand->carModels;
    return view('models', compact('models'));
});
