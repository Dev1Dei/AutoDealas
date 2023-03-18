<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Inertia\Inertia;
use App\Models\Listing;
class NewListingController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return Inertia::render('NewListing', ['brands' => $brands]);
    }

    public function store(Request $request)
    {
        
      
    }
    public function create(Request $request){

        if (is_array($request->input('fuelType'))) {
            $fuelType = implode(',', $request->input('fuelType'));
          } else {
            $fuelType = $request->input('fuelType');
          }

          if (is_array($request->input('transmition'))) {
            $transmition = implode(',', $request->input('transmition'));
          } else {
            $transmition = $request->input('transmition');
          }

          if (is_array($request->input('wheelDrive'))) {
            $wheelDrive = implode(',', $request->input('wheelDrive'));
          } else {
            $wheelDrive = $request->input('wheelDrive');
          }

          if (is_array($request->input('wheelLocation'))) {
            $wheelLocation = implode(',', $request->input('wheelLocation'));
          } else {
            $wheelLocation = $request->input('wheelLocation');
          }
          
          if (is_array($request->input('body'))) {
            $body = implode(',', $request->input('body'));
          } else {
            $body = $request->input('body');
          }

        $request->validate([
            'title' => 'required',
            'name' => 'required',
            'email' => ['required', 'email'],
            'model' => 'required',
            'brand_id' => 'required',
            'year' => 'required',
            'engine' => 'required',
            'color' => 'required',
            'fuelType' => 'required',
            'transmition' => 'required',
            'wheelDrive' => 'required',
            'wheelLocation' => 'required',
            'numberOfDoors' => 'required',
            'numberOfSeats' => 'required',
            'kW' => 'required',
            'Horses' => 'required',
            'price' => 'required',
            'city' => 'required',
            'country' => 'required',
            'body' => 'required',
            'description' => 'required',
            'sellerNumber' => 'required',
        ]);
        if ($request->hasFile('photo')) {

            $request->validate([
                'photo' => 'mimes:jpeg,png'
            ]);
            $request->file->store('photos', 'public');
        }
        Listing::create([
            'title' => $request->input('title'),
            'model' => $request->input('model'),
            'brand_id' => $request->input('brand_id'),
            'year' => $request->input('year'),
            'engine' => $request->input('engine'),
            'fuelType' => $fuelType,
            'color' => $request->input('color'),
            'transmition' => $transmition,
            'wheelDrive' => $wheelDrive,
            'wheelLocation' => $wheelLocation,
            'numberOfDoors' => $request->input('numberOfDoors'),
            'numberOfSeats' => $request->input('numberOfSeats'),
            'kW' => $request->input('kW'),
            'HP' => $request->input('Horses'),
            'price' => $request->input('price'),
            'city' => $request->input('city'),
            'country' => $request->input('country'),
            'body' => $body,
            'description' => $request->input('description'),
            'sellerNumber' => $request->input('sellerNumber'),
            'photo' => $request->file('photo'),

            
        ]);
            
            return redirect('/listings');
    }
}
