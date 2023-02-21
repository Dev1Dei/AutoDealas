<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Brand;
use App\Models\Listing;
use App\Models\User;
use App\Models\CarModel;
use Illuminate\Database\Seeder;

use function Ramsey\Uuid\v1;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //==============AIXAM================
        CarModel::create([
            'title' => 'Aixam',
            'model' => '300',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aixam',
            'model' => '400',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aixam',
            'model' => '500',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aixam',
            'model' => 'A721',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aixam',
            'model' => 'A741',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aixam',
            'model' => 'A751',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aixam',
            'model' => 'City',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aixam',
            'model' => 'Coupe',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aixam',
            'model' => 'Crossline',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aixam',
            'model' => 'Crossover',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aixam',
            'model' => 'D-truck',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aixam',
            'model' => 'GTI',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aixam',
            'model' => 'GTO',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aixam',
            'model' => 'Ligier',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aixam',
            'model' => 'Mac',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aixam',
            'model' => 'Mega',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aixam',
            'model' => 'Moskito',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aixam',
            'model' => 'MultiTruck',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aixam',
            'model' => 'Roadline',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aixam',
            'model' => 'Scouty',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aixam',
            'model' => 'Scouty R',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aixam',
            'model' => 'Kitas',
            'records' => '0',
        ]);
        
        // =======================AUDI=======================
        CarModel::create([
            'title' => 'Audi',
            'model' => '100',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => '200',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => '5000',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => '80',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => '90',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'A1',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'A2',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'A3',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'A4',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'A4 Allroad',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'A5',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'A6',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'A6 Allroad',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'A7',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'A8',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'A9',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'Cabriolet',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'Coupe',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'e-tron',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'e-tron GT',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'e-tron Sportback',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'Q2',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'Q3',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'Q4 e-tron',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'Q5',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'Q7',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'Q8',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'Quattro',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'R8',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'RS Q3',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'RS2',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'RS3',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'RS4',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'RS5',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'RS6',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'RS7',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'S1',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'S2',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'S3',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'S4',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'S5',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'S6',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'S7',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'S8',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'SQ2',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'SQ5',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'SQ7',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'TT',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'TT RS',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'TTS',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'V8',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Audi',
            'model' => 'Kitas',
            'records' => '0',
        ]);
        //=======================ACURA=======================
        CarModel::create([
            'title' => 'Acura',
            'model' => 'CL',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Acura',
            'model' => 'ILX',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Acura',
            'model' => 'Integra',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Acura',
            'model' => 'Legend',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Acura',
            'model' => 'MDX',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Acura',
            'model' => 'NSX',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Acura',
            'model' => 'RDX',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Acura',
            'model' => 'RL',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Acura',
            'model' => 'RLX',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Acura',
            'model' => 'RSX',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Acura',
            'model' => 'TL',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Acura',
            'model' => 'TLX',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Acura',
            'model' => 'TSX',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Acura',
            'model' => 'Vigor',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Acura',
            'model' => 'ZDX',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Acura',
            'model' => 'Kitas',
            'records' => '0',
        ]);
        //=======================ALFA ROMEO==================
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => '145',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => '146',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => '147',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => '155',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => '156',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => '159',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => '164',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => '166',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => '33',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => '4C',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => '75',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => '8C',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => '90',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => 'Alfasud',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => 'Alfetta',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => 'Arna',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => 'Brera',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => 'Crosswagon',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => 'Crosswagon Q4',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => 'Giulia',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => 'Giulietta',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => 'GT',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => 'GTV',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => 'Junior',
            'records' => '0',
        ]);

        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => 'Mito',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => 'RS/SZ',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => 'RZ/SZ',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => 'Spider',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => 'Sportwagon',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => 'Sprint',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => 'Stelvio',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Alfa Romeo',
            'model' => 'Kitas',
            'records' => '0',
        ]);
        // =======================Austin=====================
        CarModel::create([
            'title' => 'Austin',
            'model' => 'Allegro',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Austin',
            'model' => 'Ambasador',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Austin',
            'model' => 'Healey',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Austin',
            'model' => 'Maxi',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Austin',
            'model' => 'Metro',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Austin',
            'model' => 'Mini',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Austin',
            'model' => 'Montego',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Austin',
            'model' => 'Kitas',
            'records' => '0',
        ]);
        //===================Aston Martin================
        CarModel::create([
            'title' => 'Aston Martin',
            'model' => 'AR1',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aston Martin',
            'model' => 'Bulldog',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aston Martin',
            'model' => 'Cygnet',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aston Martin',
            'model' => 'DB',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aston Martin',
            'model' => 'DB11',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aston Martin',
            'model' => 'DB6',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aston Martin',
            'model' => 'DB7',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aston Martin',
            'model' => 'DB9',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aston Martin',
            'model' => 'DBS',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aston Martin',
            'model' => 'Lagonda',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aston Martin',
            'model' => 'One-77',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aston Martin',
            'model' => 'Rapide',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aston Martin',
            'model' => 'V12 Vanquish',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aston Martin',
            'model' => 'V12 Vantage',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aston Martin',
            'model' => 'V8',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aston Martin',
            'model' => 'Valkyrie',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aston Martin',
            'model' => 'Vanquish',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aston Martin',
            'model' => 'Vanquish S',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aston Martin',
            'model' => 'Vantage',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aston Martin',
            'model' => 'Virage',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aston Martin',
            'model' => 'Volante',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Aston Martin',
            'model' => 'Kitas',
            'records' => '0',
        ]);

        //========================BENTLEY==============
        CarModel::create([
            'title' => 'Bentley',
            'model' => 'Arnage',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Bentley',
            'model' => 'Azure',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Bentley',
            'model' => 'Bentayga',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Bentley',
            'model' => 'Brooklands',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Bentley',
            'model' => 'Continental',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Bentley',
            'model' => 'Continental Flying Spur',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Bentley',
            'model' => 'Eight',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Bentley',
            'model' => 'Mulsanne',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Bentley',
            'model' => 'S1',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Bentley',
            'model' => 'S2',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Bentley',
            'model' => 'S3',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Bentley',
            'model' => 'Turbo R',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Bentley',
            'model' => 'Turbo RT',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Bentley',
            'model' => 'Turbo S',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Bentley',
            'model' => 'Kitas',
            'records' => '0',
        ]);

        //====================BMW==================
        CarModel::create([
            'title' => 'BMW',
            'model' => 'i4',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'ix',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '114',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '116',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '118',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '120',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '123',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '125',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '128',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '130',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '135',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '214 Active Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '214 Gran Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '216 Active Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '216 Gran Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '216d Active Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '218',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '218 Active Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '218 Gran Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '220',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '220 Active Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '220 Gran Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '225',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '225 Actove Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '228',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '230',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '315',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '316',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '318',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '318 Gran Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '318 Gran Turismo',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '320',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '320 Gran Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '320 Gran Turismo',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '323',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '324',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '325',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '325 Gran Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '327',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '328',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '328 Gran Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '328 Gran Turismo',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '330',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '330 Gran Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '330 Gran Turismo',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '335',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '335 Gran Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '335 Gran Turismo',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '340',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '346',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '418 Gran Coupe',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '420',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '420 Gran Coupe',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '420i',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '425',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '428',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '428 Gran Coupe',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '430',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '430 Gran Coupe',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '435',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '440',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '518',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '520',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '520 Gran Turismo',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '523',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '524',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '525',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '528',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '530',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '530 Gran Turismo',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '535',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '535 Gran Turismo',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '540',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '545',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '550',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '550 Gran Turismo',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '5GT (F07)',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'Active Hybrid 5',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '628',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '630',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '630 Gran Turismo',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '632',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '633',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '635',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '640',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '640 Gran Coupe',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '640 Gran Turismo',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '645',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '650',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '650 Gran Coupe',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '725',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '728',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '730',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '732',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '735',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '740',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '745',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '750',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '760',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'Active Hybrid 7',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '840',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => '850',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'i3',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'i3 REx',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'i8',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'iX3',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'M1',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'M135i',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'M2',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'M235',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'M240',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'M3',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'M4',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'M5',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'M550',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'M550d',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'M6',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'X5M',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'X6M',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'Z3M',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'Z4 M',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'X1',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'X2',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'X3',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'X4',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'X5',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'X6',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'X7',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'Z1',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'Z3',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'Z4',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'Z8',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'BMW',
            'model' => 'Kitas',
            'records' => '0',
        ]);

        //=====================BUGATTI=================
        CarModel::create([
            'title' => 'Bugatti',
            'model' => 'Chiron',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Bugatti',
            'model' => 'EB 110',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Bugatti',
            'model' => 'Veyron',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Bugatti',
            'model' => 'Kitas',
            'records' => '0',
        ]);
//===================BUICK==================
        CarModel::create([
            'title' => 'Buick',
            'model' => 'Cascada',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Buick',
            'model' => 'Centurion',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Buick',
            'model' => 'Century',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Buick',
            'model' => 'Electra',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Buick',
            'model' => 'Enclave',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Buick',
            'model' => 'Encore',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Buick',
            'model' => 'Envision',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Buick',
            'model' => 'Lacrosse',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Buick',
            'model' => 'Le Sabre',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Buick',
            'model' => 'Lucerne',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Buick',
            'model' => 'Park Avenue',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Buick',
            'model' => 'Reatta',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Buick',
            'model' => 'Regal',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Buick',
            'model' => 'Rendezvous',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Buick',
            'model' => 'Riviera',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Buick',
            'model' => 'Roadmaster',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Buick',
            'model' => 'Skyhawd',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Buick',
            'model' => 'Skylark',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Buick',
            'model' => 'Verano',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Buick',
            'model' => 'Kitas',
            'records' => '0',
        ]);
        //=====================CADILLAC==================
        CarModel::create([
            'title' => 'Cadillac',
            'model' => 'Allante',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Cadillac',
            'model' => 'ATS',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Cadillac',
            'model' => 'BLS',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Cadillac',
            'model' => 'Brougham',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Cadillac',
            'model' => 'Catera',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Cadillac',
            'model' => 'Cimarron',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Cadillac',
            'model' => 'CT6',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Cadillac',
            'model' => 'CTS',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Cadillac',
            'model' => 'Deville',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Cadillac',
            'model' => 'DTS',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Cadillac',
            'model' => 'Eldorado',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Cadillac',
            'model' => 'ELR',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Cadillac',
            'model' => 'Escalade',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Cadillac',
            'model' => 'Fleetwood',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Cadillac',
            'model' => 'Seville',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Cadillac',
            'model' => 'SRX',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Cadillac',
            'model' => 'STS',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Cadillac',
            'model' => 'XLR',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Cadillac',
            'model' => 'XT5',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Cadillac',
            'model' => 'XTS',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Cadillac',
            'model' => 'Kitas',
            'records' => '0',
        ]);
        //==============Chevrolet==============
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => '1500',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => '2500',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => '3500',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Alero',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Apache',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Astro',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Avalanche',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Aveo',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Bel Air',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Beretta',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Blazer',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Bolt',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'C-10',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'C-20',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'C-30',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Camaro',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Caprice',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Captiva',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Cavalier',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Celebrity',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Chevelle',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Chevy Van',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Citation',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'City Express',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Cobalt',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Colorado',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Corsica',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Corvette',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Cruze',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'El Camino',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Epica',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Equinox',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Evanda',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Express',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'G',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'HHR',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Impala',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'K1500',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'K30',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Kalos',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Lacetti',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Lumina',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Malibu',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Matiz',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Monte Carlo',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Monza',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Nova',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Nubira',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Orlando',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Rezzo',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'S-10',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Silverado',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Spark',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Spectrum',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'SSr',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Suburban',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Tacuma',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Tahoe',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Trailblazer',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Trans Sport',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Traverse',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Trax',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Venture',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Volt',
            'records' => '0',
        ]);
        CarModel::create([
            'title' => 'Chevrolet',
            'model' => 'Kitas',
            'records' => '0',
        ]);
    //=========CHRYSLER=============
    CarModel::create([
        'title' => 'Chrysler',
        'model' => '200',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => '300',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => '300C',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => '300M',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'Aspen',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'Caravan',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'Cirrus',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'Concorde',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'Conquest',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'Crossfire',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'Daytona',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'Daytona Shelby',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'ES',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'Grand Voyager',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'GS',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'GTS',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'Imperial',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'Intrepid',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'Le Baron',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'LHS',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'Neon',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'New Yorker',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'Newport',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'Pacifica',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'Plymouth',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'Prowler',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'PT Cruiser',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'Saratoga',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'Sebring',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'Stratus',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'Town & Country',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'Valiant',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'Viper',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'Vision',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'Voyager',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Chrysler',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    //============CITROEN=================
    CarModel::create([
        'title' => 'Citroen',
        'model' => '2 CV',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'AX',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'Axel',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'Berlingo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'BX',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'C-Crosser',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'C-Elysée',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'C-Zero',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'C1',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'C15',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'C2',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'C25',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'C3',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'C3 Aircross',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'C3 Picasso',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'C3 Pluriel',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'C4',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'C4 Aircross',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'C4 Cactus',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'C4 Grand Picasso',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'C4 Picasso',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'C5',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'C5 Aircross',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'C5 X',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'C6',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'C8',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'CX',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'DS',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'DS3',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'DS3 Crossback',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'DS4',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'DS5',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'DS7 Crossback',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'Evasion',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'GSA',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'Jumper',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'Jumpy',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'Jumpy Combi',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'Nemo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'Relay',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'Saxo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'SM',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'SpaceTourer',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'Synergie',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'Visa',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'Xantia',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'XM',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'Xsara',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'Xsara Picasso',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'ZX',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Citroen',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//======================DODGE===================
    CarModel::create([
        'title' => 'Dodge',
        'model' => 'Avenger',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dodge',
        'model' => 'Caliber',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dodge',
        'model' => 'Caravan',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dodge',
        'model' => 'Challenger',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dodge',
        'model' => 'Charger',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dodge',
        'model' => 'Dakota',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dodge',
        'model' => 'Dart',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dodge',
        'model' => 'Daytona',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dodge',
        'model' => 'Demon',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dodge',
        'model' => 'Diplomat',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dodge',
        'model' => 'Durango',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dodge',
        'model' => 'Dynasty',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dodge',
        'model' => 'Grand Caravan',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dodge',
        'model' => 'Hornet',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dodge',
        'model' => 'Intrepid',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dodge',
        'model' => 'Journey',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dodge',
        'model' => 'Magnum',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dodge',
        'model' => 'Monaco',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dodge',
        'model' => 'Neon',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dodge',
        'model' => 'Nitro',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dodge',
        'model' => 'Omni',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dodge',
        'model' => 'RAM',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dodge',
        'model' => 'Spirit',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dodge',
        'model' => 'Stealth',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dodge',
        'model' => 'Stratus',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dodge',
        'model' => 'Viper',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dodge',
        'model' => 'Voyager',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dodge',
        'model' => 'Kitas',
        'records' => '0',
    ]);

//======================DACIA================
    CarModel::create([
        'title' => 'Dacia',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dacia',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dacia',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dacia',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dacia',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dacia',
        'model' => '1300',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dacia',
        'model' => '1310',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dacia',
        'model' => '1400',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dacia',
        'model' => '1410',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dacia',
        'model' => 'Dokker',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dacia',
        'model' => 'Dokker Van',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dacia',
        'model' => 'Duster',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dacia',
        'model' => 'Lodgy',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dacia',
        'model' => 'Logan',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dacia',
        'model' => 'Logan Van',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dacia',
        'model' => 'Nova',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dacia',
        'model' => 'Pick Up',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dacia',
        'model' => 'Sandero',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dacia',
        'model' => 'Sandero Stepway',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dacia',
        'model' => 'Solenza',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dacia',
        'model' => 'Super Nova',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Dacia',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    //==============Daewoo==============
    CarModel::create([
        'title' => 'Daewoo',
        'model' => 'Chairman',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daewoo',
        'model' => 'Cielo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daewoo',
        'model' => 'Espero',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daewoo',
        'model' => 'Evanda',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daewoo',
        'model' => 'Istana',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daewoo',
        'model' => 'Kalos',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daewoo',
        'model' => 'Korando',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daewoo',
        'model' => 'Labo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daewoo',
        'model' => 'Lacetti',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daewoo',
        'model' => 'Lanos',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daewoo',
        'model' => 'Leganza',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daewoo',
        'model' => 'Lublin',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daewoo',
        'model' => 'Magnus',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daewoo',
        'model' => 'Matiz',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daewoo',
        'model' => 'Musso',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daewoo',
        'model' => 'Nexia',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daewoo',
        'model' => 'Nubira',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daewoo',
        'model' => 'Polonez',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daewoo',
        'model' => 'Prince',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daewoo',
        'model' => 'Racer',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daewoo',
        'model' => 'Rexton',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daewoo',
        'model' => 'Rezzo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daewoo',
        'model' => 'Tacuma',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daewoo',
        'model' => 'Tico',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daewoo',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    //=====================Daihatsu============
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'Applause',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'Atrai',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'Cast',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'Charade',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'Charmant',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'Copen',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'Cuore',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'Domino',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'F Modelle',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'Feroza',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'Fourtrak',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'Freeclimber',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'Gran Move',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'Hijet',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'Luxio',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'Materia',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'Mira',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'More',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'Move',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'Pionier',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'Rocky',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'Sirion',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'Sportrak',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'Taft',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'Tanto',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'Terios',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'Tocot',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'Trevis',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'Valera',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'YRV',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Daihatsu',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//===================FERRARI============
    CarModel::create([
        'title' => 'Ferrari',
        'model' => '208',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => '248',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => '250',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => '288',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => '308',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => '328',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => '330',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => '348',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => '360',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => '365',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => '400',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => '412',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => '456',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => '458 Italia',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => '488 GTB',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => '512',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => '575',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => '599GTB',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => '612',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => '750',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => 'California',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => 'Daytona',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => 'Dino GT4',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => 'Enzo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => 'F12berlinetta',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => 'F355',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => 'F360',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => 'F40',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => 'F430',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => 'F50',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => 'F550',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => 'FF',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => 'GTC4Lusso',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => 'LaFerrari',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => 'Mondial',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => 'Superamerica',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => 'Testarossa',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ferrari',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//====================FIAT==================
    CarModel::create([
        'title' => 'Fiat',
        'model' => '124',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => '124 Spider',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => '125p',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => '126',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => '127',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => '128',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => '130',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => '131',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => '132',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => '500',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => '500 Abarth',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => '500e',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => '500L',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => '500X',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => '600',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => '850',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Albea',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Barchetta',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Brava',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Bravo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Cinquecento',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Coupe',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Croma',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Dino',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Doblo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Ducato',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Duna',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Fiorino',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Freemont',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Fullback',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Grande Punto',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Idea',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Inka',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Linea',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Marea',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Marengo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Multipla',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Palio',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Palio Weekend',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Panda',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Punto',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Punto Evo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Qubo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Regata',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Ritmo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Scudo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Sedici',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Seicento',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Siena',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Spider',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Stilo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Strada',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Talento',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Tempra',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Tipo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Ulysse',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Uno',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'X 1/9',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fiat',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    //==================FISKER================
    CarModel::create([
        'title' => 'Fisker',
        'model' => 'EMotion',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fisker',
        'model' => 'Karma',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fisker',
        'model' => 'Latigo CS',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fisker',
        'model' => 'Orbit',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Fisker',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    //===================FORD===============
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Aerostar',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Aspire',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'B-MAX',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Bronco',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'C-MAX',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Capri',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Club Wagon',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Connect Tourneo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Contour',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Cougar',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Courier',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Crown',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Econoline',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Econovan',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'EcoSport',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'EDGE',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Escape',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Escort',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Excursion',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Expedition',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Explorer',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Express',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'F150',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'F250',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'F350',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'F450',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'F470',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'F700',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Fairlane',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Falcon',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Festiva',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Fiesta',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'FIVE HUNDRED',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Flex',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Focus',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Focus C-Max',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Focus RS',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Focus ST',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Freestar',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Freestyle',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Fusion',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Galaxy',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Granada',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Grand C-MAX',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'GT',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Ka',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'KA+',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Kuga',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'LTD',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Maverick',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Mercury',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Mondeo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Mustang',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Mustang Mach-E',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Orion',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Probe',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Puma',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Ranchero',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Ranger',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'S-Max',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Scorpio',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Sierra',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Sportka',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Streetka',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Superduty',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'T',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Taunus',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Taurus',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Tempo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Thunderbird',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Tourneo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Tourneo Connect',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Tourneo Courier',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Tourneo Custom',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Transit',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Transit Connect',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Transit Connect Electric',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Transit Courier',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Transit Custom',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Windstar',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Ford',
        'model' => 'Kitas',
        'records' => '0',
    ]);

//=====================GMC==============
    CarModel::create([
        'title' => 'GMC',
        'model' => 'Acadia',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GMC',
        'model' => 'Canyon',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GMC',
        'model' => 'Envoy',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GMC',
        'model' => 'Jimmy',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GMC',
        'model' => 'Safari',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GMC',
        'model' => 'Savana',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GMC',
        'model' => 'Sierra',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GMC',
        'model' => 'Sonoma',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GMC',
        'model' => 'Suburban',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GMC',
        'model' => 'Syclone',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GMC',
        'model' => 'Terrain',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GMC',
        'model' => 'Typhoon',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GMC',
        'model' => 'Vandura',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GMC',
        'model' => 'Yukon',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GMC',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//====================GAZ===========================
    CarModel::create([
        'title' => 'GAZ',
        'model' => '11-73',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GAZ',
        'model' => '12 ZiM',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GAZ',
        'model' => '12B',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GAZ',
        'model' => '13',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GAZ',
        'model' => '14',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GAZ',
        'model' => '20',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GAZ',
        'model' => '21',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GAZ',
        'model' => '2110',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GAZ',
        'model' => '22',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GAZ',
        'model' => '24',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GAZ',
        'model' => '2410',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GAZ',
        'model' => '2752',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GAZ',
        'model' => '3110',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GAZ',
        'model' => '32213',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GAZ',
        'model' => '3302',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GAZ',
        'model' => '3308',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GAZ',
        'model' => '61',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GAZ',
        'model' => '64',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GAZ',
        'model' => '66',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GAZ',
        'model' => '67',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GAZ',
        'model' => '69',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GAZ',
        'model' => '69A',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GAZ',
        'model' => 'Chaika',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GAZ',
        'model' => 'Gazele',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GAZ',
        'model' => 'M-20 Pobeda',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GAZ',
        'model' => 'M1',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GAZ',
        'model' => 'Volga',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'GAZ',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//====================Goupil==============
    CarModel::create([
        'title' => 'Goupil',
        'model' => 'G1',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Goupil',
        'model' => 'G2',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Goupil',
        'model' => 'G3',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Goupil',
        'model' => 'G4',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Goupil',
        'model' => 'GEM',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Goupil',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//====================HONDA================
    CarModel::create([
        'title' => 'Honda',
        'model' => 'Accord',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'Aerodeck',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'Avancier',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'Capa',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'City',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'Civic',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'Clarity Fuel Cell',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'Concerto',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'CR-V',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'CR-Z',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'Crosstour',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'CRX',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'Domani',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'e',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'Element',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'Fit',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'FR-V',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'HR-V',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'Insight',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'Inspire',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'Integra',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'Jazz',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'LaGreat',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'Legend',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'Life',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'Logo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'Mobilo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'NSX',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'Odyssey',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'Passport',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'Pilot',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'Prelude',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'Ridgeline',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'S2000',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'Shuttle',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'Stream',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'Today',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Honda',
        'model' => 'Kitas',
        'records' => '0',
    ]);

    //========================HUMMER==============
    CarModel::create([
        'title' => 'Hummer',
        'model' => 'H1',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hummer',
        'model' => 'H2',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hummer',
        'model' => 'H3',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hummer',
        'model' => 'HX',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hummer',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//=======================Hyuindai
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Accent',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Atos',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Avante',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Azera',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Bayon',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Coupe',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Elantra',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Entourage',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Equus',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Excel',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Galloper',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Genesis',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Genesis Coupe',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Getz',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Grand Santa Fe',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Grandeur',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'H-1',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'H-1 Starex',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'H100',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'H200',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'H350',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'i10',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'i20',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'i30',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'i40',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'i50',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Ioniq',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'IONIQ 5',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'ix20',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'ix35',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'ix55',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Kona',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Lantra',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Lavita',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Marcia',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Matrix',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Pony',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'S-Coupe',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Santa Fe',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Santamo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Solaris',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Sonata',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Sonica',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Starex',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Terracan',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Tiburon',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Trajet',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Tuscon',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Veloster',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Veracruz',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'XG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'XG 30',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'XG 350',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Hyundai',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//==================INFINITI====================
    CarModel::create([
        'title' => 'Infiniti',
        'model' => 'EX',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Infiniti',
        'model' => 'EX30',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Infiniti',
        'model' => 'FX',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Infiniti',
        'model' => 'FX30',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Infiniti',
        'model' => 'FX35',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Infiniti',
        'model' => 'FX37',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Infiniti',
        'model' => 'FX45',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Infiniti',
        'model' => 'FX50',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Infiniti',
        'model' => 'G',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Infiniti',
        'model' => 'G35',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Infiniti',
        'model' => 'I30',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Infiniti',
        'model' => 'I35',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Infiniti',
        'model' => 'J30',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Infiniti',
        'model' => 'M',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Infiniti',
        'model' => 'M35/45',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Infiniti',
        'model' => 'M37',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Infiniti',
        'model' => 'Q30',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Infiniti',
        'model' => 'Q45',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Infiniti',
        'model' => 'Q50',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Infiniti',
        'model' => 'Q60',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Infiniti',
        'model' => 'Q70',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Infiniti',
        'model' => 'QX30',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Infiniti',
        'model' => 'QX50',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Infiniti',
        'model' => 'QX56',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Infiniti',
        'model' => 'QX60',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Infiniti',
        'model' => 'QX70',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Infiniti',
        'model' => 'QX80',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Infiniti',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    //=================ISUZU===================
    CarModel::create([
        'title' => 'Isuzu',
        'model' => 'Amigo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Isuzu',
        'model' => 'Ascender',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Isuzu',
        'model' => 'Aska',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Isuzu',
        'model' => 'Axiom',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Isuzu',
        'model' => 'Campo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Isuzu',
        'model' => 'D-Max',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Isuzu',
        'model' => 'Gemini',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Isuzu',
        'model' => 'HiLander',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Isuzu',
        'model' => 'Impulse',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Isuzu',
        'model' => 'Midi',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Isuzu',
        'model' => 'MU',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Isuzu',
        'model' => 'NPR',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Isuzu',
        'model' => 'Panther',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Isuzu',
        'model' => 'Piazza',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Isuzu',
        'model' => 'Pick up',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Isuzu',
        'model' => 'Rodeo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Isuzu',
        'model' => 'Trooper',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Isuzu',
        'model' => 'Turkuaz',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Isuzu',
        'model' => 'VehiCROSS',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Isuzu',
        'model' => 'Wizard',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Isuzu',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    //==================IVECO==================
    CarModel::create([
        'title' => 'Iveco',
        'model' => '29-11',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Iveco',
        'model' => '29L10',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Iveco',
        'model' => '29L14',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Iveco',
        'model' => '29S11',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Iveco',
        'model' => '35-10',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Iveco',
        'model' => '35-12',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Iveco',
        'model' => '35C10',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Iveco',
        'model' => '35C15',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Iveco',
        'model' => '35C18',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Iveco',
        'model' => '35S12',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Iveco',
        'model' => '35S13',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Iveco',
        'model' => '35S14',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Iveco',
        'model' => '35S18',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Iveco',
        'model' => '40-10',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Iveco',
        'model' => '50C18',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Iveco',
        'model' => '65C15',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Iveco',
        'model' => 'Daily',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Iveco',
        'model' => 'Daily 35',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Iveco',
        'model' => 'Massif',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Iveco',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    //====================JAGUAR===============
    CarModel::create([
        'title' => 'Jaguar',
        'model' => 'Daimler',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jaguar',
        'model' => 'E-Pace',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jaguar',
        'model' => 'E-Type',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jaguar',
        'model' => 'F-Pace',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jaguar',
        'model' => 'F-Type',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jaguar',
        'model' => 'I-Pace',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jaguar',
        'model' => 'MK II',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jaguar',
        'model' => 'S-Type',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jaguar',
        'model' => 'X-Type',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jaguar',
        'model' => 'XE',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jaguar',
        'model' => 'XF',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jaguar',
        'model' => 'XJ',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jaguar',
        'model' => 'XJ-E',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jaguar',
        'model' => 'XJR',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jaguar',
        'model' => 'XJS',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jaguar',
        'model' => 'XK',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jaguar',
        'model' => 'XK8',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jaguar',
        'model' => 'XKR',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jaguar',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//====================JEEP=================
    CarModel::create([
        'title' => 'Jeep',
        'model' => 'Cherokee',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jeep',
        'model' => 'CJ',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jeep',
        'model' => 'Comanche',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jeep',
        'model' => 'Commander',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jeep',
        'model' => 'Compass',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jeep',
        'model' => 'Grand Cherokee',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jeep',
        'model' => 'Liberty',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jeep',
        'model' => 'Patriot',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jeep',
        'model' => 'Renegade',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jeep',
        'model' => 'Wagoneer',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jeep',
        'model' => 'Willys',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jeep',
        'model' => 'Wrangler',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Jeep',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//=====================KIA====================
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Asia Rocsta',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Besta',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Cadenza',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Carens',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Carnival',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => "Cee'd",
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Cerato',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Clarus',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'e-Niro',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Elan',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'EV6',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Forte',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Joice',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'K2700',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'K8',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'K9',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'K900',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Leo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Magentis',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Mentor',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Niro',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Opirus',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Optima',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Picanto',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Pregio',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Pride',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => "Pro cee'd",
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Retona',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Rio',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Roadster',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Rocsta',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Sedona',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Seltos',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Sephia',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Shuma',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Sorento',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Soul',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Spectra',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Sportage',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Stinger',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Stonic',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Telluride',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Venga',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'XCeed',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Kia',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    //============================LADA===============
    CarModel::create([
        'title' => 'Lada',
        'model' => '110',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '111',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '1117',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '1118',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '1119',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '112',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '1200',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '1300',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '1500',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '2101',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '21011',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '21013',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '2102',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '2103',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '2104',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '2105',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '21051',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '21053',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '2106',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '21061',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '21063',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '2107',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '2108',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '2109',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '2110',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '2111',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '21110',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '21111',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '2112',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '2115',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '2120',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '2121',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '21213',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '21214',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '21215',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '2123',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '2129',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '2131',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '2141',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '2170',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => '2329',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => 'Aleko',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => 'Forma',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => 'Granta',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => 'Kalina',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => 'Niva',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => 'Nova',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => 'Oka',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => 'Priora',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => 'Samara',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => 'Vesta',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => 'Vis',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => 'XRAY',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lada',
        'model' => 'Kitas',
        'records' => '0',
    ]);

//========================Lancia===============
    CarModel::create([
        'title' => 'Lancia',
        'model' => 'Beta',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lancia',
        'model' => 'Dedra',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lancia',
        'model' => 'Delta',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lancia',
        'model' => 'Flaminia',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lancia',
        'model' => 'Fulvia',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lancia',
        'model' => 'Gamma',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lancia',
        'model' => 'Kappa',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lancia',
        'model' => 'Lybra',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lancia',
        'model' => 'Montecarlo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lancia',
        'model' => 'Musa',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lancia',
        'model' => 'Phedra',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lancia',
        'model' => 'Stratos',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lancia',
        'model' => 'Thema',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lancia',
        'model' => 'Thesis',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lancia',
        'model' => 'Voyager',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lancia',
        'model' => 'Y',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lancia',
        'model' => 'Ypsilon',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lancia',
        'model' => 'Zeta',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lancia',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//============================LAND ROVER===================
    CarModel::create([
        'title' => 'Land Rover',
        'model' => 'Defender',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Land Rover',
        'model' => 'Discovery',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Land Rover',
        'model' => 'Discovery Sport',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Land Rover',
        'model' => 'Freelander',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Land Rover',
        'model' => 'Range Rover',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Land Rover',
        'model' => 'Range Rover Evoque',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Land Rover',
        'model' => 'Range Rover Sport',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Land Rover',
        'model' => 'Range Rover Velar',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Land Rover',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//=======================LEXUS====================
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'CT 200h',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'ES 300',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'ES 300h',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'ES 330',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'ES 350',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'ES 350h',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'GS 200t',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'GS 250',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'GS 300',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'GS 300h',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'GS 350',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'GS 400',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'GS 430',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'GS 450',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'GS 450h',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'GS 460',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'GS-F',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'GX 460',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'GX 470',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'GX 640',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'HS 250h',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'IS 200',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'IS 220',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'IS 250',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'IS 300',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'IS 300h',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'IS 350',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'IS-F',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'LS 500',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'LS 500h',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'LFA',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'LS 400',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'LS 430',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'LS 460',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'LS 460h',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'LS 500',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'LS 500h',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'LS 600',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'LS 600h',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'LX 450',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'LX 470',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'LX 570',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'NX 200t',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'NX 300h',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'RC 200t',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'RC 300',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'RC 300h',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'RC 350',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'RC-F',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'RX 200t',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'RX 300',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'RX 330',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'RX 350',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'RX 400',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'RX 400h',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'RX 450',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'RX 450h',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'SC 300',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'SC 400',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'SC 430',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'UX 250h',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'SL',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lexus',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//=======================LINCOLN=========
    CarModel::create([
        'title' => 'Lincoln',
        'model' => 'Continental',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lincoln',
        'model' => 'LS',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lincoln',
        'model' => 'Mark LT',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lincoln',
        'model' => 'MKS',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lincoln',
        'model' => 'MKT',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lincoln',
        'model' => 'MKX',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lincoln',
        'model' => 'MKZ',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lincoln',
        'model' => 'Navigator',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lincoln',
        'model' => 'Town Car',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lincoln',
        'model' => 'Zephyr',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Lincoln',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//========================MASERATI===============
    CarModel::create([
        'title' => 'Maserati',
        'model' => '222',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Maserati',
        'model' => '224',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Maserati',
        'model' => '228',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Maserati',
        'model' => '3200',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Maserati',
        'model' => '418',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Maserati',
        'model' => '420',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Maserati',
        'model' => '4200',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Maserati',
        'model' => '422',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Maserati',
        'model' => '424',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Maserati',
        'model' => '430',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Maserati',
        'model' => 'Biturbo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Maserati',
        'model' => 'Coupe',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Maserati',
        'model' => 'Ghibli',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Maserati',
        'model' => 'GranCabrio',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Maserati',
        'model' => 'Gransport',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Maserati',
        'model' => 'GranTurismo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Maserati',
        'model' => 'Indy',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Maserati',
        'model' => 'Karif',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Maserati',
        'model' => 'Levante',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Maserati',
        'model' => 'MC Stradale',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Maserati',
        'model' => 'MC12',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Maserati',
        'model' => 'Merak',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Maserati',
        'model' => 'Quattroporte',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Maserati',
        'model' => 'Shamal',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Maserati',
        'model' => 'Spyder',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Maserati',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//====================Maybach=================
    CarModel::create([
        'title' => 'Maybach',
        'model' => '57',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Maybach',
        'model' => '62',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Maybach',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    //==========================MAZDA=============
    CarModel::create([
        'title' => 'Mazda',
        'model' => '121',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => '2',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => '3',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => '323',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => '323F',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => '5',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => '6',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => '626',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => '929',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'B2500',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'Bongo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'BT-50',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'CX-3',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'CX-30',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'CX-4',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'CX-5',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'CX-7',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'CX-9',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'Demio',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'Millenia',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'MPV',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'MX-3',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'MX-30',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'MX-5',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'MX-6',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'Pick Up',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'Premacy',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'Protege',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'RX-6',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'RX-7',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'RX-8',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'Serija B',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'Serija E',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'Tribute',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'Xedos',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'Xedos 6',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'Xedos 9',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mazda',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//==================Mercedes-Benz=============
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '100',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '108',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '110',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '180',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '190',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '200',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '207',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '208',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '209',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '210',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '211',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '212',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '219',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '220',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '230',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '240',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '250',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '260',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '270',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '280',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '290',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '300',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '300 GD',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '307',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '308',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '320',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '350',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '380',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '400',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '416',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '420',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '450',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '500',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '560',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => '600',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'A 140',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'A 150',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'A 160',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'A 170',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'A 180',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'A 190',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'A 200',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'A 210',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'A 220',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'A 230',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'A 240',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'A 250',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'A 45 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'AMG GT',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'B 150',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'B 160',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'B 170',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'B 180',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'B 200',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'B 220',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'B 246',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'B 250',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'B Electric Drive',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'C 160',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'C 180',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'C 200',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'C 220',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'C 230',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'C 240',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'C 250',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'C 270',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'C 280',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'C 30 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'C 300',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'C 32 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'C 320',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'C 350',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'C 36 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'C 43 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'C 55 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'C 63 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SC',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CE 200',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CE 220',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CE 230',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CE 300',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CL 180',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CL 200',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CL 220',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CL 230',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CL 420',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CL 500',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CL 55 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CL 600',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CL 63 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CL 65 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLA',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLA 180',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLA 200',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLA 220',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLA 250',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLA 45 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLC 160',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLC 180',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLC 200',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLC 220',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLC 230',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLC 250',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLC 350',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLK 200',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLK 220',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLK 230',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLK 240',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLK 270',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLK 280',
        'records' => '0',
    ]);

    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLK 320',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLK 350',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLK 430',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLK 500',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLK 55 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLK 63 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLS 220',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLS 250',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLS 280',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLS 300',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLS 320',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLS 350',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLS 400',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLS 450',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLS 500',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLS 55 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLS 550',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'CLS 63 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'E 124',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'E 200',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'E 210',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'E 220',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'E 230',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'E 240',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'E 250',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'E 260',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'E 270',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'E 280',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'E 290',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'E 300',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'E 320',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'E 350',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'E 36 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'E 400',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'E 420',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'E 430',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'E 50',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'E 500',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'E 55',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'E 55 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'E 550',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'E 60 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'E 63 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'E 50 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'EQA',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'EQC',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'EQS',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'EQV',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'G 230',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'G 240',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'G 250',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'G 270',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'G 280',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'G 290',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'G 300',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'G 320',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'G 350',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'G 400',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'G 500',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'G 55 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'G 63 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'G 65 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GL 320',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GL 350',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GL 420',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GL 450',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GL 500',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GL 55 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GL 550',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'G 63 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLA 180',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLA 200',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLA 220',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLA 250',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLA 45 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLS 350',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLS 400',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLS 450',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLS 500',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLS 550',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLS 63 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLC 220',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLC 250',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLC 300',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLC 350',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLC 43 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLE 53 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLE Coupe 350',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLE 250',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLE 350',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLE 400',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLE 43 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLE 450',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLE 500',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLE 63 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLK 200',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLK 220',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLK 250',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLK 280',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLK 300',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLK 320',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'GLK 350',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'MB 100',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'ML 230',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'ML 250',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'ML 270',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'ML 280',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'ML 300',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'ML 320',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'ML 350',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'ML 400',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'ML 420',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'ML 430',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'ML 450',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'ML 500',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'ML 53 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'ML 55 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'ML 550',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'ML 63 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'Monarch',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'R 280',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'R 300',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'R 320',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'R 350',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'R 500',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'R 63 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'S 250',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'S 260',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'S 280',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'S 300',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'S 320',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'S 350',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'S 400',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'S 420',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'S 430',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'S 450',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'S 500',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'S 55 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'S 550',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'S 560',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'S 600',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'S 63 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'S 65 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SL 230',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SL 280',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SL 300',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SL 320',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SL 350',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SL 380',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SL 400',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SL 420',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SL 450',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SL 500',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SL 55 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SL 550',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SL 560',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SL 60 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SL 600',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SL 63 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SL 65 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SL 70 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SL 73 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SLS 63 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SLC 180',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SLC 200',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SLC 250',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SLC 300',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SLC 43 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SLK 200',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SLK 230',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SLK 250',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SLK 260',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SLK 280',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SLK 300',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SLK 32 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SLK 320',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SLK 350',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SLK 55 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'SLR',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'Sprinter',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'V200',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'V 220',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'V 230',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'V 250',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'V 280',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'Vaneo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'Vario',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'Viano',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'Vito',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'W 123',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'W 124',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'X 220',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'X 250',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'X 350',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mercedes-Benz',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//=============================MG=============
    CarModel::create([
        'title' => 'MG',
        'model' => 'F',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'MG',
        'model' => 'MGA',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'MG',
        'model' => 'MGB',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'MG',
        'model' => 'MGF',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'MG',
        'model' => 'Midget',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'MG',
        'model' => 'Montego',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'MG',
        'model' => 'TD',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'MG',
        'model' => 'TF',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'MG',
        'model' => 'ZR',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'MG',
        'model' => 'ZS',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'MG',
        'model' => 'ZT',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'MG',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//============================MINI============
    CarModel::create([
        'title' => 'MINI',
        'model' => '1000',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'MINI',
        'model' => '1300',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'MINI',
        'model' => 'Clubman',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'MINI',
        'model' => 'Cooper',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'MINI',
        'model' => 'Cooper S',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'MINI',
        'model' => 'Cooper SD',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'MINI',
        'model' => 'Cooper SE',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'MINI',
        'model' => 'Countryman',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'MINI',
        'model' => 'Countryman S',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'MINI',
        'model' => 'EV',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'MINI',
        'model' => 'ONE',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'MINI',
        'model' => 'Paceman',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'MINI',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    //================MITSUBISHI===========
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => '3000 GT',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'ASX',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Canter',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Carisma',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Colt',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Cordia',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Cosmos',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Delica',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Diamante',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Eclipse',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Eclipse Cross',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Endeavor',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'FTO',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Galant',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Galloper',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Grandis',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'GTO',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'i-MiEV',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'L200',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'L300',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'L400',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Lancer',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Lancer Evolution',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Mirage',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Montero',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Outlander',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Pajero',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Pajero Pinin',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Pajero Sport',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Pick-up',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Pinin',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Santamo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Sapporo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Shogun',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Sigma',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Space Gear',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Space Runner',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Space Star',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Space Wagon',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Starion',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Tredia',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Mitsubishi',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//==========================MOSKVICH=======
    CarModel::create([
        'title' => 'Moskvich',
        'model' => '1500',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => '2138',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => '2140',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => '2141',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => '2142',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => '400',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => '401',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => '403',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => '404',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => '407',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => '408',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => '410',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => '411',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => '412',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => '415',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => '416',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => '420',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => '422',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => '423',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => '426',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => '427',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => '432',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => '433',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => '434',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => 'Aleko',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => 'G1',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => 'G2',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => 'G3',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => 'G4',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => 'G5',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => 'M-400',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => 'M-402',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => 'M-408',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => 'M-412',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Moskvich',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//==================Nissan===========
    CarModel::create([
        'title' => 'Nissan',
        'model' => '100 NX',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => '200 SX',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => '240 SX',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => '280 SX',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => '300 ZX',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => '350 Z',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => '370 Z',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Almera',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Almera Tino',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Altima',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Armada',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Bluebird',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Cabstar',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Cherry',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Cima',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Cube',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'e-NV200',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Evalia',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Figaro',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Frontier',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'GTR',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Interstar',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Juke',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Kicks',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'King Cab',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Kubistar',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Laurel',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Leaf',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Liberty',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Maxima',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Micra',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Murano',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'MV300',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Navara',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Note',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'NP300 Pickup',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'NV200',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'NV300',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'NV400',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Pathfinder',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Patrol',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'PickUp',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Pixo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Prairie',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Pulsar',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Qashqai',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Qashqai+2',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Quest',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Rogue',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Sentra',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Serena',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Silvia',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Skyline',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Stanza',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Sunny',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Terrano',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Tiida',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Titan',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Trade',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Urvan',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Vanette',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Versa',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Wingroad',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'X-Terra',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'X-Trail',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Xterra',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Nissan',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    //====================OPEL===============
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Adam',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Agila',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Ampera',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Ampera-e',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Antara',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Arena',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Ascona',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Astra',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'B6',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Calibra',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Campo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Cascada',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Combo',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Commodore',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Corsa',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'CROSSLAND',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Crossland X',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Diplomat',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Frontera',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'GRANDLAND',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Grandland X',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'GT',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Insignia',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Kadett',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Karl',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Manta',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Meriva',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Mokka',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Mokka X',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Monterey',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Monza',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Movano',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Nova',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Omega',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Pick p Sportcap',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Rekord',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Senator',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Signum',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Sintra',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Speedster',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Tigra',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Vectra',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Vivaro',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Zafira',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Zafira Life',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Zafira Tourer',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Opel',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//==========================PEUGEOT=============
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '1007',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '104',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '106',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '107',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '108',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '2008',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '204',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '205',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '206',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '206 CC',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '206 plus',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '207',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '207 CC',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '208',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '3008',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '301',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '304',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '305',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '306',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '307',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '307 CC',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '308',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '308 CC',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '309',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '395',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '4007',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '4008',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '404',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '405',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '406',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '407',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '5008',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '504',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '505',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '508',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '604',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '605',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '607',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '806',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => '807',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => 'Bipper',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => 'Boxer',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => 'e-208',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => 'Expert',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => 'iOn',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => 'Partner',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => 'RCZ',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => 'Rifler',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => 'Traveller',
        'records' => '0',
    ]);
    CarModel::create([
        'title' => 'Peugeot',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    
CarModel::create([
    'title' => 'Pontiac',
    'model' => '1000',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Pontiac',
    'model' => '6000',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Pontiac',
    'model' => 'Aztek',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Pontiac',
    'model' => 'Bonneville',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Pontiac',
    'model' => 'Catalina',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Pontiac',
    'model' => 'Chieftain',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Pontiac',
    'model' => 'Fiero',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Pontiac',
    'model' => 'Firebird/Trans Am',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Pontiac',
    'model' => 'G5',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Pontiac',
    'model' => 'G6',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Pontiac',
    'model' => 'G8',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Pontiac',
    'model' => 'Grand-Am',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Pontiac',
    'model' => 'Grand-Prix',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Pontiac',
    'model' => 'GTO',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Pontiac',
    'model' => 'Le Mans',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Pontiac',
    'model' => 'Montana',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Pontiac',
    'model' => 'Solstice',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Pontiac',
    'model' => 'Sunbird',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Pontiac',
    'model' => 'Sunfire',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Pontiac',
    'model' => 'Targa',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Pontiac',
    'model' => 'Trans Am',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Pontiac',
    'model' => 'Trans Sport',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Pontiac',
    'model' => 'Vibe',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Pontiac',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Porshe',
    'model' => '356',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Porshe',
    'model' => '718',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Porshe',
    'model' => '911',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Porshe',
    'model' => '912',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Porshe',
    'model' => '914',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Porshe',
    'model' => '924',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Porshe',
    'model' => '928',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Porshe',
    'model' => '944',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Porshe',
    'model' => '959',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Porshe',
    'model' => '962',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Porshe',
    'model' => '968',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Porshe',
    'model' => 'Boxster',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Porshe',
    'model' => 'Carrera GT',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Porshe',
    'model' => 'Cayenne',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Porshe',
    'model' => 'Cayenne Coupe',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Porshe',
    'model' => 'Cayman',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Porshe',
    'model' => 'Macan',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Porshe',
    'model' => 'Mission E',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Porshe',
    'model' => 'Panamera',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Porshe',
    'model' => 'Taycan',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Porshe',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Porshe',
    'model' => '356',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => '10',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => '11',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => '12',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => '14',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => '18',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => '19',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => '20',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => '21',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => '25',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => '30',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => '4',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => '5',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => '8',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => '9',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Alaskan',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Alpine A110',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Alpine A310',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Alpine V6',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Arkana',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Avantime',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Captur',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Clio',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Coupe',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Espace',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Express',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Fluence',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Fuego',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Grand Espace',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Grand Modus',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Grand Scenic',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Kadjar',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Kangoo',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Koleos',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Laguna',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Latitude',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Logan',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Magnum',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Mascott',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Master',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Megane',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Modus',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Nevada',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Rapid',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Safrane',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Scenic',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Scenic RX4',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Spacetourer',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Sport Spider',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Super 5',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Symbol',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Talisman',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Thalia',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Trafic',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Twingo',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Twizy',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Vel Satis',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Wind',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Zoe',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Renault',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rolls-Royce',
    'model' => 'Corniche',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rolls-Royce',
    'model' => 'Cullinan',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rolls-Royce',
    'model' => 'Dawn',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rolls-Royce',
    'model' => 'Flying Spur',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rolls-Royce',
    'model' => 'Ghost',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rolls-Royce',
    'model' => 'Park Ward',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rolls-Royce',
    'model' => 'Phantom',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rolls-Royce',
    'model' => 'Silver Cloud',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rolls-Royce',
    'model' => 'Silver Down',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rolls-Royce',
    'model' => 'Silver Seraph',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rolls-Royce',
    'model' => 'Silver Shadow',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rolls-Royce',
    'model' => 'Silver Spirit',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rolls-Royce',
    'model' => 'Silver Spur',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rolls-Royce',
    'model' => 'Sweptail',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rolls-Royce',
    'model' => 'Touring Limousine',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rolls-Royce',
    'model' => 'Wraith',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rolls-Royce',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => '100',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => '111',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => '114',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => '115',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => '200',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => '213',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => '214',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => '216',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => '218',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => '220',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => '25',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => '400',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => '414',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => '416',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => '418',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => '420',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => '45',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => '600',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => '618',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => '620',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => '623',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => '75',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => '800',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => '820',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => '825',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => '827',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => 'City Rover',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => 'Estate',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => 'Metro',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => 'MG',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => 'Mini',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => 'Montego',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => 'SD',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => 'Streetwise',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => 'Tourer',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Rover',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Saab',
    'model' => '9-2X',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Saab',
    'model' => '9-3',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Saab',
    'model' => '9-5',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Saab',
    'model' => '9-7X',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Saab',
    'model' => '90',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Saab',
    'model' => '900',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Saab',
    'model' => '9000',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Saab',
    'model' => '96',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Saab',
    'model' => '99',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Saab',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Scion',
    'model' => 'iQ',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Scion',
    'model' => 'tC',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Scion',
    'model' => 'xA',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Scion',
    'model' => 'xB',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Scion',
    'model' => 'xD',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Scion',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Seat',
    'model' => 'Alhambra',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Seat',
    'model' => 'Altea',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Seat',
    'model' => 'Altea XL',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Seat',
    'model' => 'Arona',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Seat',
    'model' => 'Arosa',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Seat',
    'model' => 'Ateca',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Seat',
    'model' => 'Cordoba',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Seat',
    'model' => 'el-Born',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Seat',
    'model' => 'Exeo',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Seat',
    'model' => 'Ibiza',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Seat',
    'model' => 'Inca',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Seat',
    'model' => 'Leon',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Seat',
    'model' => 'Malaga',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Seat',
    'model' => 'Marbella',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Seat',
    'model' => 'Mii',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Seat',
    'model' => 'Mii Electric',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Seat',
    'model' => 'Ronda',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Seat',
    'model' => 'Tarraco',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Seat',
    'model' => 'Terra',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Seat',
    'model' => 'Toledo',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Seat',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Skoda',
    'model' => '100',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Skoda',
    'model' => '105',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Skoda',
    'model' => '120',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Skoda',
    'model' => '130',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Skoda',
    'model' => '135',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Skoda',
    'model' => 'Citigo',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Skoda',
    'model' => 'Citigo e iV',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Skoda',
    'model' => 'Fabia',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Skoda',
    'model' => 'Favorit',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Skoda',
    'model' => 'Felicia',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Skoda',
    'model' => 'Forman',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Skoda',
    'model' => 'Kamiq',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Skoda',
    'model' => 'Karoq',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Skoda',
    'model' => 'Kodiaq',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Skoda',
    'model' => 'Octavia',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Skoda',
    'model' => 'Pick Up',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Skoda',
    'model' => 'Praktik',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Skoda',
    'model' => 'RAPID',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Skoda',
    'model' => 'Roomster',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Skoda',
    'model' => 'Scala',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Skoda',
    'model' => 'Superb',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Skoda',
    'model' => 'Superb iV',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Skoda',
    'model' => 'Yeti',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Skoda',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Smart',
    'model' => 'City',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Smart',
    'model' => 'Coupe',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Smart',
    'model' => 'Crossblade',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Smart',
    'model' => 'Forfour',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Smart',
    'model' => 'Fortwo',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Smart',
    'model' => 'Fortwo Coupe',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Smart',
    'model' => 'MCC',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Smart',
    'model' => 'Roadster',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Smart',
    'model' => 'Roomster',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Smart',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Ssangyong',
    'model' => 'Actyon',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Ssangyong',
    'model' => 'Actyon Sports',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Ssangyong',
    'model' => 'Chairman',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Ssangyong',
    'model' => 'Family',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Ssangyong',
    'model' => 'Istana',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Ssangyong',
    'model' => 'Kallista',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Ssangyong',
    'model' => 'Korando',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Ssangyong',
    'model' => 'Kyron',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Ssangyong',
    'model' => 'MUSSO',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Ssangyong',
    'model' => 'REXTON',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Ssangyong',
    'model' => 'Rodius',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Ssangyong',
    'model' => 'Tivoli',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Ssangyong',
    'model' => 'XLV',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Ssangyong',
    'model' => 'Kitas ',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Subaru',
    'model' => '1800 Coupe',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Subaru',
    'model' => 'Ascent',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Subaru',
    'model' => 'B9 Tribeca',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Subaru',
    'model' => 'Baja',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Subaru',
    'model' => 'BRZ',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Subaru',
    'model' => 'Forester',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Subaru',
    'model' => 'G3X Justy',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Subaru',
    'model' => 'Impreza',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Subaru',
    'model' => 'Impreza WRX',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Subaru',
    'model' => 'Justy',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Subaru',
    'model' => 'Legacy',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Subaru',
    'model' => 'Leone',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Subaru',
    'model' => 'Levorg',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Subaru',
    'model' => 'Libero',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Subaru',
    'model' => 'M 80',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Subaru',
    'model' => 'OUTBACK',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Subaru',
    'model' => 'R1',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Subaru',
    'model' => 'SVX',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Subaru',
    'model' => 'Trezia',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Subaru',
    'model' => 'Tribeca',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Subaru',
    'model' => 'Vivio',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Subaru',
    'model' => 'WRX STi',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Subaru',
    'model' => 'XT',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Subaru',
    'model' => 'XV',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Subaru',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'Aerio',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'Alto',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'Baleno',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'Cappuccino',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'Carry',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'Celerio',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'Cultis Wagon',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'Equator',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'Esteem',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'Every Landy',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'Forenza',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'Grand Vitara',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'Ignis',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'Jimny',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'Kei',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'Kizashi',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'Liana',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'LJ',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'Reno',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'Samurai',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'SJ',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'Splash',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'Super-Carry',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'Swace',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'Swift',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'SX4',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'SX4 S-Cross',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'Twin',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'Verona',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'Vitara',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'Wagon R+',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'X-90',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'XL-7',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'XL7',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Suzuki',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Tesla',
    'model' => 'Model 3',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Tesla',
    'model' => 'Model S',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Tesla',
    'model' => 'Model X',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Tesla',
    'model' => 'Model Y',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Tesla',
    'model' => 'Roadster',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Tesla',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => '4-Runner',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Allion',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Alphard',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Auris',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Avalon',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Avensis',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Avensis Verso',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Aygo',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'C-HR',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Camry',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Camry Solara',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Carina',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Celica',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'CH-R',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Chaser',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Corolla',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Corolla Verso',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Cressida',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Cresta',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Crown',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Dyna',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Echo',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Estima',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'FJ',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'GT86',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Hiace',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Highlander',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Hilux',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Ipsum',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'iQ',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Kluger V',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Land Cruiser',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Lite-Ace',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Matrix',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Mega Cruiser',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'MR2',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Nadia',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Paseo',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Picnic',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Previa',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Prius',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Prius c',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Prius +',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Proace',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Proace City',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Proace Verso',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'RAV4',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Rush',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Scion',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Scion TC',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Sequoia',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Sienna',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Soarer',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Solara',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Starlet',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Supra',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Tacoma',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Tercel',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Tundra',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Urban Cruiser',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Venza',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Verso',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Verso-S',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Yaris',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Yaris Verso',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Toyota',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Trabant',
    'model' => '601',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Trabant',
    'model' => 'P 50/60',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Trabant',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Triumph',
    'model' => 'Dolomite',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Triumph',
    'model' => 'GT6',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Triumph',
    'model' => 'Herald',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Triumph',
    'model' => 'Moss',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Triumph',
    'model' => 'Spitfire',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Triumph',
    'model' => 'Stag',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Triumph',
    'model' => 'TR1',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Triumph',
    'model' => 'TR2',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Triumph',
    'model' => 'TR3',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Triumph',
    'model' => 'TR4',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Triumph',
    'model' => 'TR5',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Triumph',
    'model' => 'TR6',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Triumph',
    'model' => 'TR7',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Triumph',
    'model' => 'TR8',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Triumph',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'UAZ',
    'model' => '2101',
    'records' => '0',
    ]);
    CarModel::create([
    'title' => 'UAZ',
    'model' => '2103',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'UAZ',
    'model' => '2106',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'UAZ',
    'model' => '2206',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'UAZ',
    'model' => '3151',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'UAZ',
    'model' => '3153',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'UAZ',
    'model' => '3162',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'UAZ',
    'model' => '3303',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'UAZ',
    'model' => '3741',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'UAZ',
    'model' => '3909',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'UAZ',
    'model' => '3962',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'UAZ',
    'model' => '452',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'UAZ',
    'model' => '469',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'UAZ',
    'model' => '469 B',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'UAZ',
    'model' => 'Hunter',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'UAZ',
    'model' => 'Patriot',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'UAZ',
    'model' => 'Pickup',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'UAZ',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => '181',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Amarok',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Arteon',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Atlas',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Beetle',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Bora',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Buggy',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Caddy',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'California',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Caravelle',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'CC',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Corrado',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Crafter',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Cross Touran',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Derby',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'e-Crafter',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'e-Golf',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'e-Up',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Eos',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Fox',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Garbus',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Golf',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Golf Alltrack',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Golf Plus',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Golf Sportsvan',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'ID. Buzz',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'ID. Crozz',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'ID.3',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'ID.4',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'ID.5',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'IItis',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Jetta',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Kafer',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Karmann Ghia',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Lavida',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'LT',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Lupo',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Multivan',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'New Beetle',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Passat',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Passat Alltrack',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Passat CC',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Phaeton',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Polo',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Rabbit',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Routan',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Santana',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Scirocco',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Sharan',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'T-Cross',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'T-Roc',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Taro',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Tiguan',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Tiguan Allspace',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Touareg',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Touran',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Transporter',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'up!',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Vento',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volkswagen',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => '240',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => '244',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => '245',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => '262',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => '264',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => '340',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => '360',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => '440',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => '460',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => '480',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => '740',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => '744',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => '745',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => '760',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => '780',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => '850',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => '855',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => '940',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => '944',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => '945',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => '960',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => '965',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => 'Amazon',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => 'C30',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => 'C70',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => 'Polar',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => 'Polestar 1',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => 'Polestar 2',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => 'S40',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => 'S60',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => 'S60 Cross Country',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => 'S70',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => 'S80',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => 'S90',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => 'V40',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => 'V40 Cross Country',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => 'V50',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => 'V60',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => 'V60 Cross Country',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => 'V70',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => 'V90',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => 'V90 Cross Country',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => 'XC40',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => 'XC60',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => 'XC70',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => 'XC90',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'Volvo',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'ZAZ',
    'model' => '965',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'ZAZ',
    'model' => '966',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'ZAZ',
    'model' => '968',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'ZAZ',
    'model' => '968A',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'ZAZ',
    'model' => '968B',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'ZAZ',
    'model' => 'Tavrija',
    'records' => '0',
    ]);
    
    CarModel::create([
    'title' => 'ZAZ',
    'model' => 'Kitas',
    'records' => '0',
    ]);

    



       //\App\Models\User::factory(6);
        //Listing::factory(6)->create();
        
       /* Listing::create([
            'Type' => 'Automobilis',
            'title' => 'Audi A4 B6',
            'tags' => 'Cool',
            'model' => 'A4',
            'make' => 'Audi',
            'year' => '2002',
            'engine' => '2.0l',
            'fuelType' => 'Benzinas',
            'color' => 'Dark Blue',
            'transmition' => 'Manual',
            'FWD/AWD/RWD' => 'FWD',
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
            'description' => 'Puikus automobilis',
            'sellerNumber' => '+3706797660
            2',
        ]);
        Listing::create([
            'Type' => 'Automobilis',
            'title' => 'Audi A4 B6',
            'tags' => 'Cool',
            'model' => 'A4',
            'make' => 'Audi',
            'year' => '2002',
            'engine' => '2.0l',
            'fuelType' => 'Benzinas',
            'color' => 'Dark Blue',
            'transmition' => 'Manual',
            'FWD/AWD/RWD' => 'FWD',
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
            'description' => 'Puikus automobilis',
            'sellerNumber' => '+3706797660
            2',
        ]);
        Brand::create([
            'title' => 'Aixam',
            'records' => '0'
        ]);
        
        Brand::create([
            'title' => 'Audi',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Acura',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Alfa Romeo',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Austin',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Aston Martin',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Bentley',
            'records' => '0
            ',
        ]); 
        
        Brand::create([
            'title' => 'BMW',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Bugatti',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Buick',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Cadillac',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Chevrolet',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Chrysler',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Citroen',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Dodge',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Dacia',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Daewoo',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Daihatsu',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Ferrari',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Fiat',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Fisker',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Ford',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'GMC',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'GAZ',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Goupil',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Honda',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Hummer',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Hyundai',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Infiniti',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Isuzu',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Iveco',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Jaguar',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Jeep',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Kia',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Lada',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Lancia',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Land Rover',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Lexus',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Lincoln',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Maserati',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Maybach',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Mazda',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Mercedes-Benz',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'MG',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Microcar',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'MINI',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Mitsubishi',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Moskvich',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Nissan',
            'records' => '0
            ',
        ]);
       
        
        Brand::create([
            'title' => 'Opel',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Peugeot',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Pontiac',
            'records' => '0
            ',
        ]);
         
        Brand::create([
            'title' => 'Porsche',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Renault',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Rolls-Royce',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Rover',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Saab',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Scion',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Seat',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Skoda',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Smart',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Ssangyong',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Subaru',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Suzuki',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Tesla',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Toyota',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Trabant',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Triumph',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'UAZ',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Volkswagen',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Volvo',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'ZAZ',
            'records' => '0
            ',
        ]);
        
        Brand::create([
            'title' => 'Kita',
            'records' => '0
            ',
        ]);
       
/*
    //    Listing::create([
    //     'Type' => 'Lengvasis Automobilis',
    //     'title' => 'Opel Astra',
    //     'tags' => 'gay, awesome',
    //     'make' => 'Opel',
    //     'model' => 'Astra',
    //     'engine' => '0
    .8 l. 90KW (0
    22 Ag)',
    //     'fuelType' => 'Benzinas',
    //     'color' => 'Mėlyna',
    //     'transmition' => 'Mechaninė',
    //     'FWD/AWD/RWD' => 'Priekiniai varantys ratai',
    //     'defects' => 'Be defektų',
    //     'wheelLocation' => 'Priekiniai varantys ratai',
    //     'numberOfDoors' => '4/5',
    //     'numberOfSeats' => '5',
    //     'VIN' => '4Y0
    SL65848Z40
    439',
    //     'price' => '0
    500',
    //     'city' => 'Klaipėda',
    //     'country' => 'Lietuva',
    //     'TPass' => '2024-05',
    //     'traits' => 'El.Langai, Kablys, Klimato kontrolė, Lengvo lydinio ratlankiai, Audio grotuvas, Oro pagalvės, Kritulių jutiklis, Rūko žibintai, Serviso knygelė',
    //     'description' => 'Puikus automobilis iki bažnyčios ir namo',
    //     'sellerNumber' => '+3706797660
    2',

    //    ]);

    //    Listing::create([
    //     'Type' => 'Lengvasis Automobilis',
    //     'title' => 'Opel Astra2',
    //     'tags' => 'gay, awesome',
    //     'make' => 'Opel',
    //     'model' => 'Astra2',
    //     'engine' => '0
    .8 l. 90KW (0
    22 Ag)',
    //     'fuelType' => 'Benzinas',
    //     'color' => 'Mėlyna',
    //     'transmition' => 'Mechaninė',
    //     'FWD/AWD/RWD' => 'Priekiniai varantys ratai',
    //     'defects' => 'Be defektų',
    //     'wheelLocation' => 'Priekiniai varantys ratai',
    //     'numberOfDoors' => '4/5',
    //     'numberOfSeats' => '5',
    //     'VIN' => '4Y0
    SL65848Z40
    439',
    //     'price' => '0
    500',
    //     'city' => 'Klaipėda',
    //     'country' => 'Lietuva',
    //     'TPass' => '2024-05',
    //     'traits' => 'El.Langai, Kablys, Klimato kontrolė, Lengvo lydinio ratlankiai, Audio grotuvas, Oro pagalvės, Kritulių jutiklis, Rūko žibintai, Serviso knygelė',
    //     'description' => 'Puikus automobilis iki bažnyčios ir namo',
    //     'sellerNumber' => '+3706797660
    2',

    //    ]);
    */

    }
}
