<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Inertia\Inertia;
class NewListingController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return Inertia::render('NewListing', ['brands' => $brands]);
    }

    public function show($id)
    {
        $brand = Brand::find($id);
        $models = $brand->carModels()->get();
        return Inertia::render('NewListing', ['models' => $models]);
    }
}
