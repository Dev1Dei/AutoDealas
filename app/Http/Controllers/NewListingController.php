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

}
