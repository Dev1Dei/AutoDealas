<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\ListingModelController;
use App\Http\Controllers\ModelController;
use illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Models\Brand;
use App\Models\CarModel;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\NewListingController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ListModelController;
use App\Http\Controllers\LoginController;


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
Route::resource('/', FrontPageController::class);
Route::resource('/models', ModelController::class);
Route::get('/listings/sort-by-price-asc', [ListingController::class, 'sortByPriceAsc'])->name('listings.sortByPriceAsc');
Route::get('/listings', [ListingController::class, 'index']);
Route::post('/listings/search', [ListingController::class, 'search']);
Route::get('/listings/{id}', [ListingController::class, 'show'])->name('listings.show');

 Route::get('/register', function () {
        return inertia('Registruotis');
    });
    
    Route::get('/prisijungti', function () {
        return inertia('Prisijungti');
    });
Route::middleware(['guest'])->group(function () {
    
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/register', [LoginController::class, 'register'])->name('register');
   
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::resource('/newlisting', NewListingController::class);
    Route::resource('newlisting/models', ListModelController::class)->middleware('auth');
    Route::post('/listings', [NewListingController::class, 'create']);
});

// Route::middleware(['auth'])->group(function () {
//     Route::get('/', function () {
//         return inertia('Home');
//     });
// });


//Pre-Vue
/*
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
    return view
    ('home', compact('brands', 'models'));


});
*/