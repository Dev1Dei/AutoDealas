<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Brand;
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
        
        Brand::create([
            'title' => 'Aixam'
        ]);
        
        Brand::create([
            'title' => 'Audi'
        ]);
        
        Brand::create([
            'title' => 'Acura'
        ]);
        
        Brand::create([
            'title' => 'Alfa Romeo'
        ]);
        
        Brand::create([
            'title' => 'Austin'
        ]);
        
        Brand::create([
            'title' => 'Aston Martin'
        ]);
        
        Brand::create([
            'title' => 'Bentley'
        ]); 
        
        Brand::create([
            'title' => 'BMW'
        ]);
        
        Brand::create([
            'title' => 'Bugatti'
        ]);
        
        Brand::create([
            'title' => 'Buick'
        ]);
        
        Brand::create([
            'title' => 'Cadillac'
        ]);
        
        Brand::create([
            'title' => 'Chevrolet'
        ]);
        
        Brand::create([
            'title' => 'Chrysler'
        ]);
        
        Brand::create([
            'title' => 'Citroen'
        ]);
        
        Brand::create([
            'title' => 'Dodge'
        ]);
        
        Brand::create([
            'title' => 'Dacia'
        ]);
        
        Brand::create([
            'title' => 'Daewoo'
        ]);
        
        Brand::create([
            'title' => 'Daihatsu'
        ]);
        
        Brand::create([
            'title' => 'Ferrari'
        ]);
        
        Brand::create([
            'title' => 'Fiat'
        ]);
        
        Brand::create([
            'title' => 'Fisker'
        ]);
        
        Brand::create([
            'title' => 'Ford'
        ]);
        
        Brand::create([
            'title' => 'GMC'
        ]);
        
        Brand::create([
            'title' => 'GAZ'
        ]);
        
        Brand::create([
            'title' => 'Goupil'
        ]);
        
        Brand::create([
            'title' => 'Honda'
        ]);
        
        Brand::create([
            'title' => 'Hummer'
        ]);
        
        Brand::create([
            'title' => 'Hyundai'
        ]);
        
        Brand::create([
            'title' => 'Infiniti'
        ]);
        
        Brand::create([
            'title' => 'Isuzu'
        ]);
        
        Brand::create([
            'title' => 'Iveco'
        ]);
        
        Brand::create([
            'title' => 'Jaguar'
        ]);
        
        Brand::create([
            'title' => 'Jeep'
        ]);
        
        Brand::create([
            'title' => 'Kia'
        ]);
        
        Brand::create([
            'title' => 'Lada'
        ]);
        
        Brand::create([
            'title' => 'Lancia'
        ]);
        
        Brand::create([
            'title' => 'Land Rover'
        ]);
        
        Brand::create([
            'title' => 'Lexus'
        ]);
        
        Brand::create([
            'title' => 'Lincoln'
        ]);
        
        Brand::create([
            'title' => 'Maserati'
        ]);
        
        Brand::create([
            'title' => 'Maybach'
        ]);
        
        Brand::create([
            'title' => 'Mazda'
        ]);
        
        Brand::create([
            'title' => 'Mercedes-Benz'
        ]);
        
        Brand::create([
            'title' => 'MG'
        ]);
        
        Brand::create([
            'title' => 'Microcar'
        ]);
        
        Brand::create([
            'title' => 'MINI'
        ]);
        
        Brand::create([
            'title' => 'Mitsubishi'
        ]);
        
        Brand::create([
            'title' => 'Moskvich'
        ]);
        
        Brand::create([
            'title' => 'Nissan'
        ]);
       
        
        Brand::create([
            'title' => 'Opel'
        ]);
        
        Brand::create([
            'title' => 'Peugeot'
        ]);
        
        Brand::create([
            'title' => 'Pontiac'
        ]);
         
        Brand::create([
            'title' => 'Porsche'
        ]);
        
        Brand::create([
            'title' => 'Renault'
        ]);
        
        Brand::create([
            'title' => 'Rolls-Royce'
        ]);
        
        Brand::create([
            'title' => 'Rover'
        ]);
        
        Brand::create([
            'title' => 'Saab'
        ]);
        
        Brand::create([
            'title' => 'Scion'
        ]);
        
        Brand::create([
            'title' => 'Seat'
        ]);
        
        Brand::create([
            'title' => 'Skoda'
        ]);
        
        Brand::create([
            'title' => 'Smart'
        ]);
        
        Brand::create([
            'title' => 'Ssangyong'
        ]);
        
        Brand::create([
            'title' => 'Subaru'
        ]);
        
        Brand::create([
            'title' => 'Suzuki'
        ]);
        
        Brand::create([
            'title' => 'Tesla'
        ]);
        
        Brand::create([
            'title' => 'Toyota'
        ]);
        
        Brand::create([
            'title' => 'Trabant'
        ]);
        
        Brand::create([
            'title' => 'Triumph'
        ]);
        
        Brand::create([
            'title' => 'UAZ'
        ]);
        
        Brand::create([
            'title' => 'Volkswagen'
        ]);
        
        Brand::create([
            'title' => 'Volvo'
        ]);
        
        Brand::create([
            'title' => 'ZAZ'
        ]);
        
        Brand::create([
            'title' => 'Kita'
        ]);
        

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
