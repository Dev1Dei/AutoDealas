<?php


use illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Models\Brand;
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

//Single Listing
Route::get('/listings/{id}', function($id){
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});
//Main screen
Route::get('/', ['as' => 'home_path', 'uses' => function () {
    return view('home', [
        'brands' => Brand::all()
    ]);
}]);
// Moto screen
Route::get('moto', function()
{
    return view('moto');
});
