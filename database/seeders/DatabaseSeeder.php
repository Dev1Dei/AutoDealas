<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       \App\Models\User::factory(10)->create();
        Listing::factory(6)->create();
    //    Listing::create([
    //     'Type' => 'Lengvasis Automobilis',
    //     'title' => 'Opel Astra',
    //     'tags' => 'gay, awesome',
    //     'make' => 'Opel',
    //     'model' => 'Astra',
    //     'engine' => '1.8 l. 90KW (122 Ag)',
    //     'fuelType' => 'Benzinas',
    //     'color' => 'Mėlyna',
    //     'transmition' => 'Mechaninė',
    //     'FWD/AWD/RWD' => 'Priekiniai varantys ratai',
    //     'defects' => 'Be defektų',
    //     'wheelLocation' => 'Priekiniai varantys ratai',
    //     'numberOfDoors' => '4/5',
    //     'numberOfSeats' => '5',
    //     'VIN' => '4Y1SL65848Z411439',
    //     'price' => '1500',
    //     'city' => 'Klaipėda',
    //     'country' => 'Lietuva',
    //     'TPass' => '2024-05',
    //     'traits' => 'El.Langai, Kablys, Klimato kontrolė, Lengvo lydinio ratlankiai, Audio grotuvas, Oro pagalvės, Kritulių jutiklis, Rūko žibintai, Serviso knygelė',
    //     'description' => 'Puikus automobilis iki bažnyčios ir namo',
    //     'sellerNumber' => '+37067976612',

    //    ]);

    //    Listing::create([
    //     'Type' => 'Lengvasis Automobilis',
    //     'title' => 'Opel Astra2',
    //     'tags' => 'gay, awesome',
    //     'make' => 'Opel',
    //     'model' => 'Astra2',
    //     'engine' => '1.8 l. 90KW (122 Ag)',
    //     'fuelType' => 'Benzinas',
    //     'color' => 'Mėlyna',
    //     'transmition' => 'Mechaninė',
    //     'FWD/AWD/RWD' => 'Priekiniai varantys ratai',
    //     'defects' => 'Be defektų',
    //     'wheelLocation' => 'Priekiniai varantys ratai',
    //     'numberOfDoors' => '4/5',
    //     'numberOfSeats' => '5',
    //     'VIN' => '4Y1SL65848Z411439',
    //     'price' => '1500',
    //     'city' => 'Klaipėda',
    //     'country' => 'Lietuva',
    //     'TPass' => '2024-05',
    //     'traits' => 'El.Langai, Kablys, Klimato kontrolė, Lengvo lydinio ratlankiai, Audio grotuvas, Oro pagalvės, Kritulių jutiklis, Rūko žibintai, Serviso knygelė',
    //     'description' => 'Puikus automobilis iki bažnyčios ir namo',
    //     'sellerNumber' => '+37067976612',

    //    ]);
    }
}
