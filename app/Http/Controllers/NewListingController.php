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
        'title' => 'required',
        'make' => 'required',
        'model' => 'required',
        'year' => 'required',
        'fuelType' => 'required',
        'engine' => 'required',
        'transmition' => 'required',
        'city' => 'required',
        'price' => 'required',
        'description' => 'required',
        'photo' => 'nullable|file|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Add this line
    ]);
    
    
    if ($request->hasFile('photo')) {
      $photo = $request->file('photo');
      $filename = time() . '.' . $photo->getClientOriginalExtension();
      $path = $photo->storeAs('public/uploads/photos', $filename);
  
      $validatedData['photo'] = 'uploads/photos/' . $filename;
  }
  
  $listing = Listing::create($validatedData);
  
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
            'engine' => ['required'],
            'color' => 'required',
            'photo' => 'nullable|file|image|mimes:jpeg,png,jpg,gif,svg|max:999999999',
            'fuelType' => 'required',
            'transmition' => 'required',
            'wheelDrive' => 'required',
            'wheelLocation' => 'required',
            'numberOfDoors' => 'required',
            'kW' => ['required', 'numeric'],
            'miles' => ['required', 'numeric'],
            'Horses' => 'required',
            'price' => ['required', 'numeric'],
            'city' => 'required',
            'country' => 'required',
            'body' => 'required',
            'description' => 'required',
            'sellerNumber' => 'required',
            'email' => 'required',
            'name' => 'required',
        
        ]);
        $photoPath = '';

       
        if ($request->hasFile('photo')) {
          $image = $request->file('photo');
          $name = time() . '.' . $image->getClientOriginalExtension();
          $destinationPath = 'uploads/photos';
  
          // Create the directory if it doesn't exist
          if (!File::exists(storage_path('app/public/' . $destinationPath))) {
              File::makeDirectory(storage_path('app/public/' . $destinationPath), 0755, true);
          }
  
          $image->storeAs($destinationPath, $name, 'public');
  
          $photoPath = $destinationPath . '/' . $name;
         
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
            'kW' => $request->input('kW'),
            'HP' => $request->input('Horses'),
            'price' => $request->input('price'),
            'city' => $request->input('city'),
            'country' => $request->input('country'),
            'body' => $body,
            'description' => $request->input('description'),
            'sellerNumber' => $request->input('sellerNumber'),
            'miles' => $request->input('miles'),
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'photo' => $photoPath,
            'user_id' => $user->id,
          
            
        ]);
            
            return redirect('/listings');
    }
}
