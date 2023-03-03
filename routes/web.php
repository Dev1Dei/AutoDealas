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
//All Models
Route::get('models', function() {
    return view('models', [
        'models' => CarModel::all()
    ]);
});
//Single Listing
Route::get('/listings/{id}', function($id){
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});
// Moto screen
Route::get('moto', function()
{
    return view('moto');
});
//Count listings by make and update brands table & models
Route::get('/', function () {
    // Get the count of listings for each make and update the brands table
    $countedData = Listing::select('make','model', DB::raw('count(*) as total'))
        ->groupBy('make')
        ->groupBy('model')
        ->get();

    foreach ($countedData as $count) {
        Brand::updateOrInsert(
            ['title' => $count->make],
            ['records' => $count->total]
        );
        CarModel::updateOrInsert(
            ['model' => $count->model],
            ['records' => $count->total]
        );
    }
    // Get all brands and models
    $brands = Brand::all();
    $models = CarModel::all();

    // Pass the brands and models to the home view
    return view('home', compact('brands', 'models'));


});
