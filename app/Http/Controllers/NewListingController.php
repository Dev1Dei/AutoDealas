<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\CarModel;
use Inertia\Inertia;
use App\Models\Listing;
use Illuminate\Support\Facades\File;
class NewListingController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return Inertia::render('NewListing', ['brands' => $brands]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'uploads/photos';
    
            // Create the directory if it doesn't exist
            if (!File::exists(storage_path('app/public/' . $destinationPath))) {
                File::makeDirectory(storage_path('app/public/' . $destinationPath), 0755, true);
            }
    
            $image->storeAs($destinationPath, $name, 'public');
    
            $validatedData['photo'] = $destinationPath . '/' . $name;
            dd($validatedData);
        }
    
        Listing::create($validatedData);
    
        return redirect('/listings');
    }
    

    
    public function create(Request $request){
      $brand = Brand::findOrFail($request->input('brand_id'));
      $carModel = CarModel::where('model', $request->input('model'))->firstOrFail();
      $user = $request->user();

      
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
            'email' => 'required',
            'name' => 'required',
        
        ]);
        if ($request->hasFile('photo')) {

            $request->validate([
                'photo' => 'mimes:jpeg,png'
            ]);
            $request->file('photo')->store('photos', 'public');
        }
        Listing::create([
            'title' => $request->input('title'),
            'model' => $request->input('model'),
            'make' => $brand->title,
            'brand_id' => $request->input('brand_id'),
            'car_model_id' => $carModel->id,
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
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'photo' => $request->file('photo'),
            'user_id' => $user->id,
          
            
        ]);
            
            return redirect('/listings');
    }
}
