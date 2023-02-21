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
Route::get('listings', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});
// All Brands
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
//Main screen
Route::get('/', ['as' => 'home_path', 'uses' => function () {
    return view('home', [
        'brands' => Brand::all(),
        'models' => CarModel::all()
    ]);
}]);
// Moto screen
Route::get('moto', function()
{
    return view('moto');
});


//Count listings by make and update brands table
Route::get('/', function () {
    $countedData = Listing::select('make', DB::raw('count(*) as total'))
        ->groupBy('make')
        ->get();

        foreach ($countedData as $count) {
            Brand::updateOrInsert(
                ['title' => $count->make],
                ['records' => $count->total]
            );
        }

    $brands = Brand::all();

    return view('home', compact('brands'));
});
//Count Listings by model and update models table
/*
Route::get('/', function () {
    $countedData = Listing::select('model', DB::raw('count(*) as total'))
        ->groupBy('model')
        ->get();

        foreach ($countedData as $count) {
            CarModel::updateOrInsert(
                ['model' => $count->model],
                ['records' => $count->total]
            );
        }

    $models = CarModel::all();

    return view('home', compact('models'));
});
*/