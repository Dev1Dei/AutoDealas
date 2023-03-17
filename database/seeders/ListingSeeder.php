<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Listing;
class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Listing::create([
            'Type' => 'Automobilis',
            'title' => 'Audi A4 B6',
            'tags' => 'Cool',
            'car_model_id' => 31,
            'brand_id' => 2,
            'year' => '2002',
            'engine' => '2.0l',
            'fuelType' => 'Benzinas',
            'color' => 'Dark Blue',
            'model' => 'A4',
            'make' => 'Audi',
            'kW' => 110,
            'HP' => 150,
            'transmition' => 'Manual',
            'wheelDrive' => 'FWD',
            'defects' => '-',
            'wheelLocation' => 'LHD',
            'numberOfDoors' => '4',
            'numberOfSeats' => '5',
            'VIN' => 'VIN',
            'price' => '2000',
            'city' => 'Kretinga',
            'country' => 'Lithuania',
            'TPass' => 'TPass',
            'traits' => 'Cool',
            'body' => 'Sedanas',
            'description' => 'Puikus automobilis',
            'sellerNumber' => '+37067976602',
            'photo' => 'photo',
        ]);
        Listing::create([
            'Type' => 'Automobilis',
            'title' => 'Audi A4 B6',
            'tags' => 'Cool',
            'car_model_id' => 31,
            'brand_id' => 2,
            'year' => '2002',
            'engine' => '2.0l',
            'model' => 'A4',
            'make' => 'Audi',
            'kW' => 110,
            'HP' => 150,
            'fuelType' => 'Benzinas',
            'color' => 'Dark Blue',
            'transmition' => 'Manual',
            'wheelDrive' => 'FWD',
            'defects' => '-',
            'wheelLocation' => 'LHD',
            'numberOfDoors' => '4',
            'numberOfSeats' => '5',
            'VIN' => 'VIN',
            'price' => '2000',
            'city' => 'Kretinga',
            'country' => 'Lithuania',
            'TPass' => 'TPass',
            'traits' => 'Cool',
            'body' => 'Sedanas',
            'description' => 'Puikus automobilis',
            'sellerNumber' => '+37067976602',
            'photo' => 'photo',
        ]);
    }
}
