<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Inertia\Inertia;
use Illuminate\Http\Request;

class ListModelController extends Controller
{
    public function show($id)
    {
        $brand = Brand::find($id);
        $models = $brand->carModels()->get();
        return Inertia::render('NewListing', ['models' => $models]);
    }
}
