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

            'brand_id' => '1',
            'model' => '300',
            'records' => '0',
        ]);
        CarModel::create([

            'brand_id' => '1',
            'model' => '400',
            'records' => '0',
        ]);
        CarModel::create([

            'brand_id' => '1',
            'model' => '500',
            'records' => '0',
        ]);
        CarModel::create([

            'brand_id' => '1',
            'model' => 'A721',
            'records' => '0',
        ]);
        CarModel::create([

            'brand_id' => '1',
            'model' => 'A741',
            'records' => '0',
        ]);
        CarModel::create([

            'brand_id' => '1',
            'model' => 'A751',
            'records' => '0',
        ]);
        CarModel::create([

            'brand_id' => '1',
            'model' => 'City',
            'records' => '0',
        ]);
        CarModel::create([

            'brand_id' => '1',
            'model' => 'Coupe',
            'records' => '0',
        ]);
        CarModel::create([

            'brand_id' => '1',
            'model' => 'Crossline',
            'records' => '0',
        ]);
        CarModel::create([

            'brand_id' => '1',
            'model' => 'Crossover',
            'records' => '0',
        ]);
        CarModel::create([

            'brand_id' => '1',
            'model' => 'D-truck',
            'records' => '0',
        ]);
        CarModel::create([

            'brand_id' => '1',
            'model' => 'GTI',
            'records' => '0',
        ]);
        CarModel::create([

            'brand_id' => '1',
            'model' => 'GTO',
            'records' => '0',
        ]);
        CarModel::create([

            'brand_id' => '1',
            'model' => 'Ligier',
            'records' => '0',
        ]);
        CarModel::create([

            'brand_id' => '1',
            'model' => 'Mac',
            'records' => '0',
        ]);
        CarModel::create([

            'brand_id' => '1',
            'model' => 'Mega',
            'records' => '0',
        ]);
        CarModel::create([

            'brand_id' => '1',
            'model' => 'Moskito',
            'records' => '0',
        ]);
        CarModel::create([

            'brand_id' => '1',
            'model' => 'MultiTruck',
            'records' => '0',
        ]);
        CarModel::create([

            'brand_id' => '1',
            'model' => 'Roadline',
            'records' => '0',
        ]);
        CarModel::create([

            'brand_id' => '1',
            'model' => 'Scouty',
            'records' => '0',
        ]);
        CarModel::create([

            'brand_id' => '1',
            'model' => 'Scouty R',
            'records' => '0',
        ]);
        CarModel::create([

            'brand_id' => '1',
            'model' => 'Kitas',
            'records' => '0',
        ]);
        
        // =======================AUDI=======================
        CarModel::create([
            'brand_id' => '2',
            'model' => '100',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => '200',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => '5000',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => '80',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => '90',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'A1',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'A2',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'A3',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'A4',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'A4 Allroad',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'A5',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'A6',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'A6 Allroad',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'A7',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'A8',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'A9',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'Cabriolet',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'Coupe',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'e-tron',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'e-tron GT',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'e-tron Sportback',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'Q2',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'Q3',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'Q4 e-tron',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'Q5',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'Q7',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'Q8',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'Quattro',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'R8',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'RS Q3',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'RS2',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'RS3',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'RS4',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'RS5',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'RS6',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'RS7',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'S1',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'S2',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'S3',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'S4',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'S5',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'S6',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'S7',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'S8',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'SQ2',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'SQ5',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'SQ7',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'TT',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'TT RS',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'TTS',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'V8',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '2',
            'model' => 'Kitas',
            'records' => '0',
        ]);
        //=======================ACURA=======================
        CarModel::create([
            'brand_id' => '3',
            'model' => 'CL',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '3',
            'model' => 'ILX',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '3',
            'model' => 'Integra',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '3',
            'model' => 'Legend',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '3',
            'model' => 'MDX',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '3',
            'model' => 'NSX',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '3',
            'model' => 'RDX',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '3',
            'model' => 'RL',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '3',
            'model' => 'RLX',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '3',
            'model' => 'RSX',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '3',
            'model' => 'TL',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '3',
            'model' => 'TLX',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '3',
            'model' => 'TSX',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '3',
            'model' => 'Vigor',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '3',
            'model' => 'ZDX',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '3',
            'model' => 'Kitas',
            'records' => '0',
        ]);
        //=======================ALFA ROMEO==================
        CarModel::create([
            'brand_id' => '4',
            'model' => '145',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => '146',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => '147',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => '155',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => '156',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => '159',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => '164',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => '166',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => '33',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => '4C',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => '75',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => '8C',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => '90',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => 'Alfasud',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => 'Alfetta',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => 'Arna',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => 'Brera',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => 'Crosswagon',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => 'Crosswagon Q4',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => 'Giulia',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => 'Giulietta',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => 'GT',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => 'GTV',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => 'Junior',
            'records' => '0',
        ]);

        CarModel::create([
            'brand_id' => '4',
            'model' => 'Mito',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => 'RS/SZ',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => 'RZ/SZ',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => 'Spider',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => 'Sportwagon',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => 'Sprint',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => 'Stelvio',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '4',
            'model' => 'Kitas',
            'records' => '0',
        ]);
        // =======================Austin=====================
        CarModel::create([
            'brand_id' => '5',
            'model' => 'Allegro',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '5',
            'model' => 'Ambasador',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '5',
            'model' => 'Healey',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '5',
            'model' => 'Maxi',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '5',
            'model' => 'Metro',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '5',
            'model' => 'Mini',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '5',
            'model' => 'Montego',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '5',
            'model' => 'Kitas',
            'records' => '0',
        ]);
        //===================Aston Martin================
        CarModel::create([
            'brand_id' => '6',
            'model' => 'AR1',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '6',
            'model' => 'Bulldog',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '6',
            'model' => 'Cygnet',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '6',
            'model' => 'DB',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '6',
            'model' => 'DB11',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '6',
            'model' => 'DB6',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '6',
            'model' => 'DB7',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '6',
            'model' => 'DB9',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '6',
            'model' => 'DBS',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '6',
            'model' => 'Lagonda',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '6',
            'model' => 'One-77',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '6',
            'model' => 'Rapide',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '6',
            'model' => 'V12 Vanquish',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '6',
            'model' => 'V12 Vantage',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '6',
            'model' => 'V8',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '6',
            'model' => 'Valkyrie',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '6',
            'model' => 'Vanquish',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '6',
            'model' => 'Vanquish S',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '6',
            'model' => 'Vantage',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '6',
            'model' => 'Virage',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '6',
            'model' => 'Volante',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '6',
            'model' => 'Kitas',
            'records' => '0',
        ]);

        //========================BENTLEY==============
        CarModel::create([
            'brand_id' => '7',
            'model' => 'Arnage',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '7',
            'model' => 'Azure',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '7',
            'model' => 'Bentayga',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '7',
            'model' => 'Brooklands',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '7',
            'model' => 'Continental',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '7',
            'model' => 'Continental Flying Spur',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '7',
            'model' => 'Eight',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '7',
            'model' => 'Mulsanne',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '7',
            'model' => 'S1',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '7',
            'model' => 'S2',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '7',
            'model' => 'S3',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '7',
            'model' => 'Turbo R',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '7',
            'model' => 'Turbo RT',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '7',
            'model' => 'Turbo S',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '7',
            'model' => 'Kitas',
            'records' => '0',
        ]);

        //====================BMW==================
        CarModel::create([
            'brand_id' => '8',
            'model' => 'i4',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'ix',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '114',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '116',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '118',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '120',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '123',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '125',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '128',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '130',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '135',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '214 Active Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '214 Gran Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '216 Active Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '216 Gran Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '216d Active Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '218',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '218 Active Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '218 Gran Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '220',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '220 Active Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '220 Gran Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '225',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '225 Actove Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '228',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '230',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '315',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '316',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '318',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '318 Gran Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '318 Gran Turismo',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '320',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '320 Gran Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '320 Gran Turismo',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '323',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '324',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '325',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '325 Gran Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '327',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '328',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '328 Gran Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '328 Gran Turismo',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '330',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '330 Gran Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '330 Gran Turismo',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '335',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '335 Gran Tourer',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '335 Gran Turismo',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '340',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '346',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '418 Gran Coupe',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '420',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '420 Gran Coupe',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '420i',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '425',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '428',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '428 Gran Coupe',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '430',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '430 Gran Coupe',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '435',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '440',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '518',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '520',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '520 Gran Turismo',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '523',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '524',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '525',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '528',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '530',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '530 Gran Turismo',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '535',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '535 Gran Turismo',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '540',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '545',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '550',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '550 Gran Turismo',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '5GT (F07)',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'Active Hybrid 5',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '628',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '630',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '630 Gran Turismo',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '632',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '633',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '635',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '640',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '640 Gran Coupe',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '640 Gran Turismo',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '645',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '650',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '650 Gran Coupe',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '725',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '728',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '730',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '732',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '735',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '740',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '745',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '750',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '760',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'Active Hybrid 7',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '840',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => '850',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'i3',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'i3 REx',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'i8',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'iX3',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'M1',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'M135i',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'M2',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'M235',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'M240',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'M3',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'M4',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'M5',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'M550',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'M550d',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'M6',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'X5M',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'X6M',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'Z3M',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'Z4 M',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'X1',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'X2',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'X3',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'X4',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'X5',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'X6',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'X7',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'Z1',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'Z3',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'Z4',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'Z8',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '8',
            'model' => 'Kitas',
            'records' => '0',
        ]);

        //=====================BUGATTI=================
        CarModel::create([
            'brand_id' => '9',
            'model' => 'Chiron',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '9',
            'model' => 'EB 110',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '9',
            'model' => 'Veyron',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '9',
            'model' => 'Kitas',
            'records' => '0',
        ]);
//===================BUICK==================
        CarModel::create([
            'brand_id' => '10',
            'model' => 'Cascada',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '10',
            'model' => 'Centurion',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '10',
            'model' => 'Century',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '10',
            'model' => 'Electra',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '10',
            'model' => 'Enclave',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '10',
            'model' => 'Encore',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '10',
            'model' => 'Envision',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '10',
            'model' => 'Lacrosse',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '10',
            'model' => 'Le Sabre',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '10',
            'model' => 'Lucerne',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '10',
            'model' => 'Park Avenue',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '10',
            'model' => 'Reatta',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '10',
            'model' => 'Regal',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '10',
            'model' => 'Rendezvous',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '10',
            'model' => 'Riviera',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '10',
            'model' => 'Roadmaster',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '10',
            'model' => 'Skyhawd',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '10',
            'model' => 'Skylark',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '10',
            'model' => 'Verano',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '10',
            'model' => 'Kitas',
            'records' => '0',
        ]);
        //=====================CADILLAC==================
        CarModel::create([
            'brand_id' => '11',
            'model' => 'Allante',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '11',
            'model' => 'ATS',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '11',
            'model' => 'BLS',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '11',
            'model' => 'Brougham',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '11',
            'model' => 'Catera',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '11',
            'model' => 'Cimarron',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '11',
            'model' => 'CT6',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '11',
            'model' => 'CTS',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '11',
            'model' => 'Deville',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '11',
            'model' => 'DTS',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '11',
            'model' => 'Eldorado',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '11',
            'model' => 'ELR',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '11',
            'model' => 'Escalade',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '11',
            'model' => 'Fleetwood',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '11',
            'model' => 'Seville',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '11',
            'model' => 'SRX',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '11',
            'model' => 'STS',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '11',
            'model' => 'XLR',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '11',
            'model' => 'XT5',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '11',
            'model' => 'XTS',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '11',
            'model' => 'Kitas',
            'records' => '0',
        ]);
        //==============Chevrolet==============
        CarModel::create([
            'brand_id' => '12',
            'model' => '1500',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => '2500',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => '3500',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Alero',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Apache',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Astro',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Avalanche',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Aveo',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Bel Air',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Beretta',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Blazer',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Bolt',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'C-10',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'C-20',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'C-30',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Camaro',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Caprice',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Captiva',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Cavalier',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Celebrity',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Chevelle',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Chevy Van',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Citation',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'City Express',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Cobalt',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Colorado',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Corsica',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Corvette',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Cruze',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'El Camino',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Epica',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Equinox',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Evanda',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Express',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'G',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'HHR',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Impala',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'K1500',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'K30',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Kalos',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Lacetti',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Lumina',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Malibu',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Matiz',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Monte Carlo',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Monza',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Nova',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Nubira',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Orlando',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Rezzo',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'S-10',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Silverado',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Spark',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Spectrum',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'SSr',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Suburban',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Tacuma',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Tahoe',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Trailblazer',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Trans Sport',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Traverse',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Trax',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Venture',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Volt',
            'records' => '0',
        ]);
        CarModel::create([
            'brand_id' => '12',
            'model' => 'Kitas',
            'records' => '0',
        ]);
    //=========CHRYSLER=============
    CarModel::create([
        'brand_id' => '13',
        'model' => '200',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => '300',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => '300C',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => '300M',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'Aspen',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'Caravan',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'Cirrus',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'Concorde',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'Conquest',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'Crossfire',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'Daytona',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'Daytona Shelby',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'ES',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'Grand Voyager',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'GS',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'GTS',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'Imperial',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'Intrepid',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'Le Baron',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'LHS',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'Neon',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'New Yorker',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'Newport',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'Pacifica',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'Plymouth',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'Prowler',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'PT Cruiser',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'Saratoga',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'Sebring',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'Stratus',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'Town & Country',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'Valiant',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'Viper',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'Vision',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'Voyager',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '13',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    //============CITROEN=================
    CarModel::create([
        'brand_id' => '14',
        'model' => '2 CV',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'AX',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'Axel',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'Berlingo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'BX',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'C-Crosser',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'C-Elysée',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'C-Zero',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'C1',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'C15',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'C2',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'C25',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'C3',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'C3 Aircross',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'C3 Picasso',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'C3 Pluriel',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'C4',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'C4 Aircross',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'C4 Cactus',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'C4 Grand Picasso',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'C4 Picasso',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'C5',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'C5 Aircross',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'C5 X',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'C6',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'C8',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'CX',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'DS',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'DS3',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'DS3 Crossback',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'DS4',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'DS5',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'DS7 Crossback',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'Evasion',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'GSA',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'Jumper',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'Jumpy',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'Jumpy Combi',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'Nemo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'Relay',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'Saxo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'SM',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'SpaceTourer',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'Synergie',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'Visa',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'Xantia',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'XM',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'Xsara',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'Xsara Picasso',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'ZX',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '14',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//======================DODGE===================
    CarModel::create([
        'brand_id' => '15',
        'model' => 'Avenger',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '15',
        'model' => 'Caliber',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '15',
        'model' => 'Caravan',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '15',
        'model' => 'Challenger',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '15',
        'model' => 'Charger',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '15',
        'model' => 'Dakota',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '15',
        'model' => 'Dart',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '15',
        'model' => 'Daytona',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '15',
        'model' => 'Demon',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '15',
        'model' => 'Diplomat',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '15',
        'model' => 'Durango',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '15',
        'model' => 'Dynasty',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '15',
        'model' => 'Grand Caravan',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '15',
        'model' => 'Hornet',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '15',
        'model' => 'Intrepid',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '15',
        'model' => 'Journey',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '15',
        'model' => 'Magnum',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '15',
        'model' => 'Monaco',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '15',
        'model' => 'Neon',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '15',
        'model' => 'Nitro',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '15',
        'model' => 'Omni',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '15',
        'model' => 'RAM',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '15',
        'model' => 'Spirit',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '15',
        'model' => 'Stealth',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '15',
        'model' => 'Stratus',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '15',
        'model' => 'Viper',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '15',
        'model' => 'Voyager',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '15',
        'model' => 'Kitas',
        'records' => '0',
    ]);

//======================DACIA================
    CarModel::create([
        'brand_id' => '16',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '16',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '16',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '16',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '16',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '16',
        'model' => '1300',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '16',
        'model' => '1310',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '16',
        'model' => '1400',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '16',
        'model' => '1410',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '16',
        'model' => 'Dokker',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '16',
        'model' => 'Dokker Van',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '16',
        'model' => 'Duster',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '16',
        'model' => 'Lodgy',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '16',
        'model' => 'Logan',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '16',
        'model' => 'Logan Van',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '16',
        'model' => 'Nova',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '16',
        'model' => 'Pick Up',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '16',
        'model' => 'Sandero',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '16',
        'model' => 'Sandero Stepway',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '16',
        'model' => 'Solenza',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '16',
        'model' => 'Super Nova',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '16',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    //==============Daewoo==============
    CarModel::create([
        'brand_id' => '17',
        'model' => 'Chairman',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '17',
        'model' => 'Cielo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '17',
        'model' => 'Espero',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '17',
        'model' => 'Evanda',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '17',
        'model' => 'Istana',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '17',
        'model' => 'Kalos',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '17',
        'model' => 'Korando',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '17',
        'model' => 'Labo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '17',
        'model' => 'Lacetti',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '17',
        'model' => 'Lanos',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '17',
        'model' => 'Leganza',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '17',
        'model' => 'Lublin',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '17',
        'model' => 'Magnus',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '17',
        'model' => 'Matiz',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '17',
        'model' => 'Musso',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '17',
        'model' => 'Nexia',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '17',
        'model' => 'Nubira',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '17',
        'model' => 'Polonez',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '17',
        'model' => 'Prince',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '17',
        'model' => 'Racer',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '17',
        'model' => 'Rexton',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '17',
        'model' => 'Rezzo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '17',
        'model' => 'Tacuma',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '17',
        'model' => 'Tico',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '17',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    //=====================Daihatsu============
    CarModel::create([
        'brand_id' => '18',
        'model' => 'Applause',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'Atrai',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'Cast',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'Charade',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'Charmant',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'Copen',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'Cuore',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'Domino',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'F Modelle',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'Feroza',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'Fourtrak',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'Freeclimber',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'Gran Move',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'Hijet',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'Luxio',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'Materia',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'Mira',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'More',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'Move',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'Pionier',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'Rocky',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'Sirion',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'Sportrak',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'Taft',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'Tanto',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'Terios',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'Tocot',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'Trevis',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'Valera',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'YRV',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '18',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//===================FERRARI============
    CarModel::create([
        'brand_id' => '19',
        'model' => '208',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => '248',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => '250',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => '288',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => '308',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => '328',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => '330',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => '348',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => '360',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => '365',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => '400',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => '412',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => '456',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => '458 Italia',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => '488 GTB',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => '512',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => '575',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => '599GTB',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => '612',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => '750',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => 'California',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => 'Daytona',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => 'Dino GT4',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => 'Enzo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => 'F12berlinetta',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => 'F355',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => 'F360',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => 'F40',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => 'F430',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => 'F50',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => 'F550',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => 'FF',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => 'GTC4Lusso',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => 'LaFerrari',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => 'Mondial',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => 'Superamerica',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => 'Testarossa',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '19',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//====================FIAT==================
    CarModel::create([
        'brand_id'=> '20',
        'model' => '124',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => '124 Spider',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => '125p',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => '126',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => '127',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => '128',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => '130',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => '131',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => '132',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => '500',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => '500 Abarth',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => '500e',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => '500L',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => '500X',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => '600',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => '850',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Albea',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Barchetta',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Brava',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Bravo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Cinquecento',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Coupe',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Croma',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Dino',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Doblo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Ducato',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Duna',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Fiorino',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Freemont',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Fullback',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Grande Punto',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Idea',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Inka',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Linea',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Marea',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Marengo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Multipla',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Palio',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Palio Weekend',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Panda',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Punto',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Punto Evo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Qubo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Regata',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Ritmo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Scudo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Sedici',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Seicento',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Siena',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Spider',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Stilo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Strada',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Talento',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Tempra',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Tipo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Ulysse',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Uno',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'X 1/9',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id'=> '20',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    //==================FISKER================
    CarModel::create([
        'brand_id' => '21',
        'model' => 'EMotion',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Karma',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Latigo CS',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Orbit',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    //===================FORD===============
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Aerostar',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Aspire',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'B-MAX',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Bronco',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'C-MAX',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Capri',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Club Wagon',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Connect Tourneo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Contour',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Cougar',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Courier',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Crown',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Econoline',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Econovan',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'EcoSport',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'EDGE',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Escape',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Escort',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Excursion',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Expedition',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Explorer',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Express',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'F150',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'F250',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'F350',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'F450',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'F470',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'F700',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Fairlane',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Falcon',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Festiva',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Fiesta',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'FIVE HUNDRED',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Flex',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Focus',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Focus C-Max',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Focus RS',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Focus ST',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Freestar',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Freestyle',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Fusion',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Galaxy',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Granada',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Grand C-MAX',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'GT',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Ka',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'KA+',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Kuga',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'LTD',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Maverick',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Mercury',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Mondeo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Mustang',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Mustang Mach-E',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Orion',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Probe',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Puma',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Ranchero',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Ranger',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'S-Max',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Scorpio',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Sierra',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Sportka',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Streetka',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Superduty',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'T',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Taunus',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Taurus',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Tempo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Thunderbird',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Tourneo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Tourneo Connect',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Tourneo Courier',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Tourneo Custom',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Transit',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Transit Connect',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Transit Connect Electric',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Transit Courier',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Transit Custom',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Windstar',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '21',
        'model' => 'Kitas',
        'records' => '0',
    ]);

//=====================GMC==============
    CarModel::create([
        'brand_id' => '23',
        'model' => 'Acadia',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '23',
        'model' => 'Canyon',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '23',
        'model' => 'Envoy',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '23',
        'model' => 'Jimmy',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '23',
        'model' => 'Safari',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '23',
        'model' => 'Savana',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '23',
        'model' => 'Sierra',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '23',
        'model' => 'Sonoma',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '23',
        'model' => 'Suburban',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '23',
        'model' => 'Syclone',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '23',
        'model' => 'Terrain',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '23',
        'model' => 'Typhoon',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '23',
        'model' => 'Vandura',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '23',
        'model' => 'Yukon',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '23',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//====================GAZ===========================
    CarModel::create([
        'brand_id' => '24',
        'model' => '11-73',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '24',
        'model' => '12 ZiM',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '24',
        'model' => '12B',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '24',
        'model' => '13',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '24',
        'model' => '14',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '24',
        'model' => '20',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '24',
        'model' => '21',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '24',
        'model' => '2110',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '24',
        'model' => '22',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '24',
        'model' => '24',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '24',
        'model' => '2410',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '24',
        'model' => '2752',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '24',
        'model' => '3110',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '24',
        'model' => '32213',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '24',
        'model' => '3302',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '24',
        'model' => '3308',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '24',
        'model' => '61',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '24',
        'model' => '64',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '24',
        'model' => '66',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '24',
        'model' => '67',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '24',
        'model' => '69',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '24',
        'model' => '69A',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '24',
        'model' => 'Chaika',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '24',
        'model' => 'Gazele',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '24',
        'model' => 'M-20 Pobeda',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '24',
        'model' => 'M1',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '24',
        'model' => 'Volga',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '24',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//====================Goupil==============
    CarModel::create([
        'brand_id' => '25',
        'model' => 'G1',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '25',
        'model' => 'G2',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '25',
        'model' => 'G3',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '25',
        'model' => 'G4',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '25',
        'model' => 'GEM',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '25',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//====================HONDA================
    CarModel::create([
        'brand_id' => '26',
        'model' => 'Accord',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'Aerodeck',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'Avancier',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'Capa',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'City',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'Civic',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'Clarity Fuel Cell',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'Concerto',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'CR-V',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'CR-Z',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'Crosstour',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'CRX',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'Domani',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'e',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'Element',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'Fit',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'FR-V',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'HR-V',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'Insight',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'Inspire',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'Integra',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'Jazz',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'LaGreat',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'Legend',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'Life',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'Logo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'Mobilo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'NSX',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'Odyssey',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'Passport',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'Pilot',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'Prelude',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'Ridgeline',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'S2000',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'Shuttle',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'Stream',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'Today',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '26',
        'model' => 'Kitas',
        'records' => '0',
    ]);

    //========================HUMMER==============
    CarModel::create([
        'brand_id' => '27',
        'model' => 'H1',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '27',
        'model' => 'H2',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '27',
        'model' => 'H3',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '27',
        'model' => 'HX',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '27',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//=======================Hyuindai
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Accent',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Atos',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Avante',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Azera',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Bayon',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Coupe',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Elantra',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Entourage',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Equus',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Excel',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Galloper',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Genesis',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Genesis Coupe',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Getz',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Grand Santa Fe',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Grandeur',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'H-1',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'H-1 Starex',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'H100',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'H200',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'H350',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'i10',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'i20',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'i30',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'i40',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'i50',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Ioniq',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'IONIQ 5',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'ix20',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'ix35',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'ix55',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Kona',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Lantra',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Lavita',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Marcia',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Matrix',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Pony',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'S-Coupe',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Santa Fe',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Santamo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Solaris',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Sonata',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Sonica',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Starex',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Terracan',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Tiburon',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Trajet',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Tuscon',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Veloster',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Veracruz',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'XG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'XG 30',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'XG 350',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '28',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//==================INFINITI====================
    CarModel::create([
        'brand_id' => '29',
        'model' => 'EX',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '29',
        'model' => 'EX30',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '29',
        'model' => 'FX',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '29',
        'model' => 'FX30',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '29',
        'model' => 'FX35',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '29',
        'model' => 'FX37',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '29',
        'model' => 'FX45',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '29',
        'model' => 'FX50',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '29',
        'model' => 'G',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '29',
        'model' => 'G35',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '29',
        'model' => 'I30',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '29',
        'model' => 'I35',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '29',
        'model' => 'J30',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '29',
        'model' => 'M',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '29',
        'model' => 'M35/45',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '29',
        'model' => 'M37',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '29',
        'model' => 'Q30',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '29',
        'model' => 'Q45',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '29',
        'model' => 'Q50',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '29',
        'model' => 'Q60',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '29',
        'model' => 'Q70',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '29',
        'model' => 'QX30',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '29',
        'model' => 'QX50',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '29',
        'model' => 'QX56',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '29',
        'model' => 'QX60',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '29',
        'model' => 'QX70',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '29',
        'model' => 'QX80',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '29',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    //=================ISUZU===================
    CarModel::create([
        'brand_id' => '30',
        'model' => 'Amigo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '30',
        'model' => 'Ascender',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '30',
        'model' => 'Aska',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '30',
        'model' => 'Axiom',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '30',
        'model' => 'Campo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '30',
        'model' => 'D-Max',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '30',
        'model' => 'Gemini',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '30',
        'model' => 'HiLander',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '30',
        'model' => 'Impulse',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '30',
        'model' => 'Midi',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '30',
        'model' => 'MU',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '30',
        'model' => 'NPR',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '30',
        'model' => 'Panther',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '30',
        'model' => 'Piazza',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '30',
        'model' => 'Pick up',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '30',
        'model' => 'Rodeo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '30',
        'model' => 'Trooper',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '30',
        'model' => 'Turkuaz',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '30',
        'model' => 'VehiCROSS',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '30',
        'model' => 'Wizard',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '30',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    //==================IVECO==================
    CarModel::create([
        'brand_id' => '31',
        'model' => '29-11',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '31',
        'model' => '29L10',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '31',
        'model' => '29L14',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '31',
        'model' => '29S11',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '31',
        'model' => '35-10',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '31',
        'model' => '35-12',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '31',
        'model' => '35C10',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '31',
        'model' => '35C15',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '31',
        'model' => '35C18',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '31',
        'model' => '35S12',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '31',
        'model' => '35S13',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '31',
        'model' => '35S14',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '31',
        'model' => '35S18',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '31',
        'model' => '40-10',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '31',
        'model' => '50C18',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '31',
        'model' => '65C15',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '31',
        'model' => 'Daily',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '31',
        'model' => 'Daily 35',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '31',
        'model' => 'Massif',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '31',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    //====================JAGUAR===============
    CarModel::create([
        'brand_id' => '32',
        'model' => 'Daimler',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '32',
        'model' => 'E-Pace',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '32',
        'model' => 'E-Type',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '32',
        'model' => 'F-Pace',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '32',
        'model' => 'F-Type',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '32',
        'model' => 'I-Pace',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '32',
        'model' => 'MK II',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '32',
        'model' => 'S-Type',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '32',
        'model' => 'X-Type',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '32',
        'model' => 'XE',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '32',
        'model' => 'XF',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '32',
        'model' => 'XJ',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '32',
        'model' => 'XJ-E',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '32',
        'model' => 'XJR',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '32',
        'model' => 'XJS',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '32',
        'model' => 'XK',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '32',
        'model' => 'XK8',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '32',
        'model' => 'XKR',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '32',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//====================JEEP=================
    CarModel::create([
        'brand_id' => '33',
        'model' => 'Cherokee',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '33',
        'model' => 'CJ',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '33',
        'model' => 'Comanche',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '33',
        'model' => 'Commander',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '33',
        'model' => 'Compass',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '33',
        'model' => 'Grand Cherokee',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '33',
        'model' => 'Liberty',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '33',
        'model' => 'Patriot',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '33',
        'model' => 'Renegade',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '33',
        'model' => 'Wagoneer',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '33',
        'model' => 'Willys',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '33',
        'model' => 'Wrangler',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '33',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//=====================KIA====================
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Asia Rocsta',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Besta',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Cadenza',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Carens',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Carnival',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => "Cee'd",
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Cerato',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Clarus',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'e-Niro',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Elan',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'EV6',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Forte',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Joice',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'K2700',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'K8',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'K9',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'K900',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Leo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Magentis',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Mentor',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Niro',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Opirus',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Optima',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Picanto',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Pregio',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Pride',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => "Pro cee'd",
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Retona',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Rio',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Roadster',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Rocsta',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Sedona',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Seltos',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Sephia',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Shuma',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Sorento',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Soul',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Spectra',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Sportage',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Stinger',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Stonic',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Telluride',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Venga',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'XCeed',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '34',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    //============================LADA===============
    CarModel::create([
        'brand_id' => '35',
        'model' => '110',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '111',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '1117',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '1118',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '1119',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '112',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '1200',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '1300',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '1500',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '2101',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '21011',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '21013',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '2102',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '2103',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '2104',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '2105',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '21051',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '21053',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '2106',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '21061',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '21063',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '2107',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '2108',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '2109',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '2110',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '2111',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '21110',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '21111',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '2112',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '2115',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '2120',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '2121',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '21213',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '21214',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '21215',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '2123',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '2129',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '2131',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '2141',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '2170',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => '2329',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => 'Aleko',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => 'Forma',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => 'Granta',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => 'Kalina',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => 'Niva',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => 'Nova',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => 'Oka',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => 'Priora',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => 'Samara',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => 'Vesta',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => 'Vis',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => 'XRAY',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '35',
        'model' => 'Kitas',
        'records' => '0',
    ]);

//========================Lancia===============
    CarModel::create([
        'brand_id' => '36',
        'model' => 'Beta',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '36',
        'model' => 'Dedra',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '36',
        'model' => 'Delta',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '36',
        'model' => 'Flaminia',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '36',
        'model' => 'Fulvia',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '36',
        'model' => 'Gamma',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '36',
        'model' => 'Kappa',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '36',
        'model' => 'Lybra',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '36',
        'model' => 'Montecarlo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '36',
        'model' => 'Musa',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '36',
        'model' => 'Phedra',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '36',
        'model' => 'Stratos',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '36',
        'model' => 'Thema',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '36',
        'model' => 'Thesis',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '36',
        'model' => 'Voyager',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '36',
        'model' => 'Y',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '36',
        'model' => 'Ypsilon',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '36',
        'model' => 'Zeta',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '36',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//============================LAND ROVER===================
    CarModel::create([
        'brand_id' => '37',
        'model' => 'Defender',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '37',
        'model' => 'Discovery',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '37',
        'model' => 'Discovery Sport',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '37',
        'model' => 'Freelander',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '37',
        'model' => 'Range Rover',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '37',
        'model' => 'Range Rover Evoque',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '37',
        'model' => 'Range Rover Sport',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '37',
        'model' => 'Range Rover Velar',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '37',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//=======================LEXUS====================
    CarModel::create([
        'brand_id' => '38',
        'model' => 'CT 200h',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'ES 300',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'ES 300h',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'ES 330',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'ES 350',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'ES 350h',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'GS 200t',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'GS 250',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'GS 300',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'GS 300h',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'GS 350',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'GS 400',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'GS 430',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'GS 450',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'GS 450h',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'GS 460',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'GS-F',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'GX 460',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'GX 470',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'GX 640',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'HS 250h',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'IS 200',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'IS 220',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'IS 250',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'IS 300',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'IS 300h',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'IS 350',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'IS-F',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'LS 500',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'LS 500h',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'LFA',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'LS 400',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'LS 430',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'LS 460',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'LS 460h',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'LS 500',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'LS 500h',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'LS 600',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'LS 600h',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'LX 450',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'LX 470',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'LX 570',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'NX 200t',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'NX 300h',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'RC 200t',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'RC 300',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'RC 300h',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'RC 350',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'RC-F',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'RX 200t',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'RX 300',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'RX 330',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'RX 350',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'RX 400',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'RX 400h',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'RX 450',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'RX 450h',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'SC 300',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'SC 400',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'SC 430',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'UX 250h',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'SL',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '38',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//=======================LINCOLN=========
    CarModel::create([
        'brand_id' => '39',
        'model' => 'Continental',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '39',
        'model' => 'LS',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '39',
        'model' => 'Mark LT',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '39',
        'model' => 'MKS',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '39',
        'model' => 'MKT',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '39',
        'model' => 'MKX',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '39',
        'model' => 'MKZ',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '39',
        'model' => 'Navigator',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '39',
        'model' => 'Town Car',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '39',
        'model' => 'Zephyr',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '39',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//========================MASERATI===============
    CarModel::create([
        'brand_id' => '40',
        'model' => '222',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '40',
        'model' => '224',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '40',
        'model' => '228',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '40',
        'model' => '3200',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '40',
        'model' => '418',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '40',
        'model' => '420',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '40',
        'model' => '4200',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '40',
        'model' => '422',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '40',
        'model' => '424',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '40',
        'model' => '430',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '40',
        'model' => 'Biturbo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '40',
        'model' => 'Coupe',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '40',
        'model' => 'Ghibli',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '40',
        'model' => 'GranCabrio',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '40',
        'model' => 'Gransport',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '40',
        'model' => 'GranTurismo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '40',
        'model' => 'Indy',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '40',
        'model' => 'Karif',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '40',
        'model' => 'Levante',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '40',
        'model' => 'MC Stradale',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '40',
        'model' => 'MC12',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '40',
        'model' => 'Merak',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '40',
        'model' => 'Quattroporte',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '40',
        'model' => 'Shamal',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '40',
        'model' => 'Spyder',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '40',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//====================Maybach=================
    CarModel::create([
        'brand_id' => '41',
        'model' => '57',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '41',
        'model' => '62',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '41',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    //==========================MAZDA=============
    CarModel::create([
        'brand_id' => '42',
        'model' => '121',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => '2',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => '3',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => '323',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => '323F',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => '5',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => '6',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => '626',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => '929',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'B2500',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'Bongo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'BT-50',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'CX-3',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'CX-30',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'CX-4',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'CX-5',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'CX-7',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'CX-9',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'Demio',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'Millenia',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'MPV',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'MX-3',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'MX-30',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'MX-5',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'MX-6',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'Pick Up',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'Premacy',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'Protege',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'RX-6',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'RX-7',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'RX-8',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'Serija B',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'Serija E',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'Tribute',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'Xedos',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'Xedos 6',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'Xedos 9',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '42',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//==================Mercedes-Benz=============
    CarModel::create([
        'brand_id' => '43',
        'model' => '100',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '108',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '110',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '180',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '190',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '200',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '207',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '208',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '209',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '210',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '211',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '212',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '219',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '220',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '230',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '240',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '250',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '260',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '270',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '280',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '290',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '300',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '300 GD',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '307',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '308',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '320',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '350',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '380',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '400',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '416',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '420',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '450',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '500',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '560',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => '600',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'A 140',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'A 150',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'A 160',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'A 170',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'A 180',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'A 190',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'A 200',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'A 210',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'A 220',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'A 230',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'A 240',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'A 250',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'A 45 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'AMG GT',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'B 150',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'B 160',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'B 170',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'B 180',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'B 200',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'B 220',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'B 246',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'B 250',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'B Electric Drive',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'C 160',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'C 180',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'C 200',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'C 220',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'C 230',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'C 240',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'C 250',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'C 270',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'C 280',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'C 30 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'C 300',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'C 32 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'C 320',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'C 350',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'C 36 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'C 43 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'C 55 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'C 63 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SC',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CE 200',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CE 220',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CE 230',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CE 300',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CL 180',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CL 200',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CL 220',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CL 230',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CL 420',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CL 500',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CL 55 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CL 600',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CL 63 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CL 65 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLA',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLA 180',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLA 200',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLA 220',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLA 250',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLA 45 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLC 160',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLC 180',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLC 200',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLC 220',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLC 230',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLC 250',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLC 350',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLK 200',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLK 220',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLK 230',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLK 240',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLK 270',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLK 280',
        'records' => '0',
    ]);

    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLK 320',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLK 350',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLK 430',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLK 500',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLK 55 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLK 63 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLS 220',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLS 250',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLS 280',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLS 300',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLS 320',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLS 350',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLS 400',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLS 450',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLS 500',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLS 55 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLS 550',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'CLS 63 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'E 124',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'E 200',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'E 210',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'E 220',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'E 230',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'E 240',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'E 250',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'E 260',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'E 270',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'E 280',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'E 290',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'E 300',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'E 320',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'E 350',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'E 36 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'E 400',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'E 420',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'E 430',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'E 50',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'E 500',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'E 55',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'E 55 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'E 550',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'E 60 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'E 63 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'E 50 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'EQA',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'EQC',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'EQS',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'EQV',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'G 230',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'G 240',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'G 250',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'G 270',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'G 280',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'G 290',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'G 300',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'G 320',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'G 350',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'G 400',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'G 500',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'G 55 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'G 63 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'G 65 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GL 320',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GL 350',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GL 420',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GL 450',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GL 500',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GL 55 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GL 550',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'G 63 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLA 180',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLA 200',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLA 220',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLA 250',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLA 45 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLS 350',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLS 400',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLS 450',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLS 500',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLS 550',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLS 63 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLC 220',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLC 250',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLC 300',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLC 350',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLC 43 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLE 53 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLE Coupe 350',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLE 250',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLE 350',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLE 400',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLE 43 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLE 450',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLE 500',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLE 63 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLK 200',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLK 220',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLK 250',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLK 280',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLK 300',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLK 320',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'GLK 350',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'MB 100',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'ML 230',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'ML 250',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'ML 270',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'ML 280',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'ML 300',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'ML 320',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'ML 350',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'ML 400',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'ML 420',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'ML 430',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'ML 450',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'ML 500',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'ML 53 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'ML 55 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'ML 550',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'ML 63 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'Monarch',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'R 280',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'R 300',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'R 320',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'R 350',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'R 500',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'R 63 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'S 250',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'S 260',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'S 280',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'S 300',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'S 320',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'S 350',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'S 400',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'S 420',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'S 430',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'S 450',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'S 500',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'S 55 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'S 550',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'S 560',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'S 600',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'S 63 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'S 65 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SL 230',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SL 280',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SL 300',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SL 320',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SL 350',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SL 380',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SL 400',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SL 420',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SL 450',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SL 500',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SL 55 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SL 550',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SL 560',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SL 60 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SL 600',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SL 63 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SL 65 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SL 70 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SL 73 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SLS 63 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SLC 180',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SLC 200',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SLC 250',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SLC 300',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SLC 43 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SLK 200',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SLK 230',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SLK 250',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SLK 260',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SLK 280',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SLK 300',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SLK 32 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SLK 320',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SLK 350',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SLK 55 AMG',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'SLR',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'Sprinter',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'V200',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'V 220',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'V 230',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'V 250',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'V 280',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'Vaneo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'Vario',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'Viano',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'Vito',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'W 123',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'W 124',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'X 220',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'X 250',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'X 350',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '43',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//=============================MG=============
    CarModel::create([
        'brand_id' => '44',
        'model' => 'F',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '44',
        'model' => 'MGA',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '44',
        'model' => 'MGB',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '44',
        'model' => 'MGF',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '44',
        'model' => 'Midget',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '44',
        'model' => 'Montego',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '44',
        'model' => 'TD',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '44',
        'model' => 'TF',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '44',
        'model' => 'ZR',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '44',
        'model' => 'ZS',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '44',
        'model' => 'ZT',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '44',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//============================MINI============
    CarModel::create([
        'brand_id' => '46',
        'model' => '1000',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '46',
        'model' => '1300',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '46',
        'model' => 'Clubman',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '46',
        'model' => 'Cooper',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '46',
        'model' => 'Cooper S',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '46',
        'model' => 'Cooper SD',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '46',
        'model' => 'Cooper SE',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '46',
        'model' => 'Countryman',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '46',
        'model' => 'Countryman S',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '46',
        'model' => 'EV',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '46',
        'model' => 'ONE',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '46',
        'model' => 'Paceman',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '46',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    //================MITSUBISHI===========
    CarModel::create([
        'brand_id' => '47',
        'model' => '3000 GT',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'ASX',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Canter',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Carisma',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Colt',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Cordia',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Cosmos',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Delica',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Diamante',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Eclipse',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Eclipse Cross',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Endeavor',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'FTO',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Galant',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Galloper',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Grandis',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'GTO',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'i-MiEV',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'L200',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'L300',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'L400',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Lancer',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Lancer Evolution',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Mirage',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Montero',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Outlander',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Pajero',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Pajero Pinin',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Pajero Sport',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Pick-up',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Pinin',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Santamo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Sapporo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Shogun',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Sigma',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Space Gear',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Space Runner',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Space Star',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Space Wagon',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Starion',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Tredia',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '47',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//==========================MOSKVICH=======
    CarModel::create([
        'brand_id' => '48',
        'model' => '1500',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => '2138',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => '2140',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => '2141',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => '2142',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => '400',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => '401',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => '403',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => '404',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => '407',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => '408',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => '410',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => '411',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => '412',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => '415',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => '416',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => '420',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => '422',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => '423',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => '426',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => '427',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => '432',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => '433',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => '434',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => 'Aleko',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => 'G1',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => 'G2',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => 'G3',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => 'G4',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => 'G5',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => 'M-400',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => 'M-402',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => 'M-408',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => 'M-412',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '48',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//==================Nissan===========
    CarModel::create([
        'brand_id' => '49',
        'model' => '100 NX',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => '200 SX',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => '240 SX',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => '280 SX',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => '300 ZX',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => '350 Z',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => '370 Z',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Almera',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Almera Tino',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Altima',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Armada',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Bluebird',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Cabstar',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Cherry',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Cima',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Cube',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'e-NV200',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Evalia',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Figaro',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Frontier',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'GTR',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Interstar',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Juke',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Kicks',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'King Cab',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Kubistar',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Laurel',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Leaf',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Liberty',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Maxima',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Micra',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Murano',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'MV300',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Navara',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Note',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'NP300 Pickup',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'NV200',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'NV300',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'NV400',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Pathfinder',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Patrol',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'PickUp',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Pixo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Prairie',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Pulsar',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Qashqai',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Qashqai+2',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Quest',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Rogue',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Sentra',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Serena',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Silvia',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Skyline',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Stanza',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Sunny',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Terrano',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Tiida',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Titan',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Trade',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Urvan',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Vanette',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Versa',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Wingroad',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'X-Terra',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'X-Trail',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Xterra',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '49',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    //====================OPEL===============
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Adam',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Agila',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Ampera',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Ampera-e',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Antara',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Arena',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Ascona',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Astra',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'B6',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Calibra',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Campo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Cascada',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Combo',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Commodore',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Corsa',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'CROSSLAND',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Crossland X',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Diplomat',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Frontera',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'GRANDLAND',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Grandland X',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'GT',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Insignia',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Kadett',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Karl',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Manta',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Meriva',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Mokka',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Mokka X',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Monterey',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Monza',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Movano',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Nova',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Omega',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Pick p Sportcap',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Rekord',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Senator',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Signum',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Sintra',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Speedster',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Tigra',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Vectra',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Vivaro',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Zafira',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Zafira Life',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Zafira Tourer',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '50',
        'model' => 'Kitas',
        'records' => '0',
    ]);
//==========================PEUGEOT=============
    CarModel::create([
        'brand_id' => '51',
        'model' => '1007',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '104',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '106',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '107',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '108',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '2008',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '204',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '205',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '206',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '206 CC',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '206 plus',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '207',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '207 CC',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '208',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '3008',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '301',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '304',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '305',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '306',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '307',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '307 CC',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '308',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '308 CC',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '309',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '395',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '4007',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '4008',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '404',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '405',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '406',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '407',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '5008',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '504',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '505',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '508',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '604',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '605',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '607',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '806',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => '807',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => 'Bipper',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => 'Boxer',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => 'e-208',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => 'Expert',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => 'iOn',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => 'Partner',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => 'RCZ',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => 'Rifler',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => 'Traveller',
        'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '51',
        'model' => 'Kitas',
        'records' => '0',
    ]);
    
CarModel::create([
    'brand_id' => '52',
    'model' => '1000',
    'records' => '0',
    ]);
    //============Pontiac===========
    CarModel::create([
    'brand_id' => '52',
    'model' => '6000',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '52',
    'model' => 'Aztek',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '52',
    'model' => 'Bonneville',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '52',
    'model' => 'Catalina',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '52',
    'model' => 'Chieftain',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '52',
    'model' => 'Fiero',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '52',
    'model' => 'Firebird/Trans Am',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '52',
    'model' => 'G5',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '52',
    'model' => 'G6',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '52',
    'model' => 'G8',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '52',
    'model' => 'Grand-Am',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '52',
    'model' => 'Grand-Prix',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '52',
    'model' => 'GTO',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '52',
    'model' => 'Le Mans',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '52',
    'model' => 'Montana',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '52',
    'model' => 'Solstice',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '52',
    'model' => 'Sunbird',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '52',
    'model' => 'Sunfire',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '52',
    'model' => 'Targa',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '52',
    'model' => 'Trans Am',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '52',
    'model' => 'Trans Sport',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '52',
    'model' => 'Vibe',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '52',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    //==========PORSCHE=============
    CarModel::create([
    'brand_id' => '53',
    'model' => '356',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '53',
    'model' => '718',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '53',
    'model' => '911',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '53',
    'model' => '912',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '53',
    'model' => '914',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '53',
    'model' => '924',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '53',
    'model' => '928',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '53',
    'model' => '944',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '53',
    'model' => '959',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '53',
    'model' => '962',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '53',
    'model' => '968',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '53',
    'model' => 'Boxster',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '53',
    'model' => 'Carrera GT',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '53',
    'model' => 'Cayenne',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '53',
    'model' => 'Cayenne Coupe',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '53',
    'model' => 'Cayman',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '53',
    'model' => 'Macan',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '53',
    'model' => 'Mission E',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '53',
    'model' => 'Panamera',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '53',
    'model' => 'Taycan',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '53',
    'model' => '356',
    'records' => '0',
    ]);
    CarModel::create([
        'brand_id' => '53',
        'model' => 'Kitas',
        'records' => '0',
        ]);
    
        //=============RENAULT========
    CarModel::create([
    'brand_id' => '54',
    'model' => '10',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => '11',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => '12',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => '14',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => '18',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => '19',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => '20',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => '21',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => '25',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => '30',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => '4',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => '5',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => '8',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => '9',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Alaskan',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Alpine A110',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Alpine A310',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Alpine V6',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Arkana',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Avantime',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Captur',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Clio',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Coupe',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Espace',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Express',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Fluence',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Fuego',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Grand Espace',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Grand Modus',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Grand Scenic',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Kadjar',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Kangoo',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Koleos',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Laguna',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Latitude',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Logan',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Magnum',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Mascott',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Master',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Megane',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Modus',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Nevada',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Rapid',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Safrane',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Scenic',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Scenic RX4',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Spacetourer',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Sport Spider',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Super 5',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Symbol',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Talisman',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Thalia',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Trafic',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Twingo',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Twizy',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Vel Satis',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Wind',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Zoe',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '54',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    //=============ROLLS ROYCE========
    CarModel::create([
    'brand_id' => '55',
    'model' => 'Corniche',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '55',
    'model' => 'Cullinan',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '55',
    'model' => 'Dawn',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '55',
    'model' => 'Flying Spur',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '55',
    'model' => 'Ghost',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '55',
    'model' => 'Park Ward',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '55',
    'model' => 'Phantom',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '55',
    'model' => 'Silver Cloud',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '55',
    'model' => 'Silver Down',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '55',
    'model' => 'Silver Seraph',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '55',
    'model' => 'Silver Shadow',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '55',
    'model' => 'Silver Spirit',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '55',
    'model' => 'Silver Spur',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '55',
    'model' => 'Sweptail',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '55',
    'model' => 'Touring Limousine',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '55',
    'model' => 'Wraith',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '55',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    //================Rover==============
    CarModel::create([
    'brand_id' => '56',
    'model' => '100',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => '111',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => '114',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => '115',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => '200',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => '213',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => '214',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => '216',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => '218',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => '220',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => '25',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => '400',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => '414',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => '416',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => '418',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => '420',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => '45',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => '600',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => '618',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => '620',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => '623',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => '75',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => '800',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => '820',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => '825',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => '827',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => 'City Rover',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => 'Estate',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => 'Metro',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => 'MG',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => 'Mini',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => 'Montego',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => 'SD',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => 'Streetwise',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => 'Tourer',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '56',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    //===============Saab=========
    CarModel::create([
    'brand_id' => '57',
    'model' => '9-2X',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '57',
    'model' => '9-3',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '57',
    'model' => '9-5',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '57',
    'model' => '9-7X',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '57',
    'model' => '90',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '57',
    'model' => '900',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '57',
    'model' => '9000',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '57',
    'model' => '96',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '57',
    'model' => '99',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '57',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    //=================Scion==========
    CarModel::create([
    'brand_id' => '58',
    'model' => 'iQ',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '58',
    'model' => 'tC',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '58',
    'model' => 'xA',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '58',
    'model' => 'xB',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '58',
    'model' => 'xD',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '58',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    //=====================Seat=================
    CarModel::create([
    'brand_id' => '59',
    'model' => 'Alhambra',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '59',
    'model' => 'Altea',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '59',
    'model' => 'Altea XL',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '59',
    'model' => 'Arona',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '59',
    'model' => 'Arosa',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '59',
    'model' => 'Ateca',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '59',
    'model' => 'Cordoba',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '59',
    'model' => 'el-Born',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '59',
    'model' => 'Exeo',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '59',
    'model' => 'Ibiza',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '59',
    'model' => 'Inca',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '59',
    'model' => 'Leon',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '59',
    'model' => 'Malaga',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '59',
    'model' => 'Marbella',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '59',
    'model' => 'Mii',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '59',
    'model' => 'Mii Electric',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '59',
    'model' => 'Ronda',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '59',
    'model' => 'Tarraco',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '59',
    'model' => 'Terra',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '59',
    'model' => 'Toledo',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '59',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    //===================Skoda============
    CarModel::create([
    'brand_id' => '60',
    'model' => '100',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '60',
    'model' => '105',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '60',
    'model' => '120',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '60',
    'model' => '130',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '60',
    'model' => '135',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '60',
    'model' => 'Citigo',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '60',
    'model' => 'Citigo e iV',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '60',
    'model' => 'Fabia',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '60',
    'model' => 'Favorit',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '60',
    'model' => 'Felicia',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '60',
    'model' => 'Forman',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '60',
    'model' => 'Kamiq',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '60',
    'model' => 'Karoq',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '60',
    'model' => 'Kodiaq',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '60',
    'model' => 'Octavia',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '60',
    'model' => 'Pick Up',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '60',
    'model' => 'Praktik',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '60',
    'model' => 'RAPID',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '60',
    'model' => 'Roomster',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '60',
    'model' => 'Scala',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '60',
    'model' => 'Superb',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '60',
    'model' => 'Superb iV',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '60',
    'model' => 'Yeti',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '60',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '61',
    'model' => 'City',
    'records' => '0',
    ]);
    //==================SMART==============
    CarModel::create([
    'brand_id' => '61',
    'model' => 'Coupe',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '61',
    'model' => 'Crossblade',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '61',
    'model' => 'Forfour',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '61',
    'model' => 'Fortwo',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '61',
    'model' => 'Fortwo Coupe',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '61',
    'model' => 'MCC',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '61',
    'model' => 'Roadster',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '61',
    'model' => 'Roomster',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '61',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    //====================Ssangyong=======
    CarModel::create([
    'brand_id' => '62',
    'model' => 'Actyon',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '62',
    'model' => 'Actyon Sports',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '62',
    'model' => 'Chairman',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '62',
    'model' => 'Family',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '62',
    'model' => 'Istana',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '62',
    'model' => 'Kallista',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '62',
    'model' => 'Korando',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '62',
    'model' => 'Kyron',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '62',
    'model' => 'MUSSO',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '62',
    'model' => 'REXTON',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '62',
    'model' => 'Rodius',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '62',
    'model' => 'Tivoli',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '62',
    'model' => 'XLV',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '62',
    'model' => 'Kitas ',
    'records' => '0',
    ]);
    //=============Subaru==========
    CarModel::create([
    'brand_id' => '63',
    'model' => '1800 Coupe',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '63',
    'model' => 'Ascent',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '63',
    'model' => 'B9 Tribeca',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '63',
    'model' => 'Baja',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '63',
    'model' => 'BRZ',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '63',
    'model' => 'Forester',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '63',
    'model' => 'G3X Justy',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '63',
    'model' => 'Impreza',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '63',
    'model' => 'Impreza WRX',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '63',
    'model' => 'Justy',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '63',
    'model' => 'Legacy',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '63',
    'model' => 'Leone',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '63',
    'model' => 'Levorg',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '63',
    'model' => 'Libero',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '63',
    'model' => 'M 80',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '63',
    'model' => 'OUTBACK',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '63',
    'model' => 'R1',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '63',
    'model' => 'SVX',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '63',
    'model' => 'Trezia',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '63',
    'model' => 'Tribeca',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '63',
    'model' => 'Vivio',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '63',
    'model' => 'WRX STi',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '63',
    'model' => 'XT',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '63',
    'model' => 'XV',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '63',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    //================Suzuki=======
    CarModel::create([
    'brand_id' => '64',
    'model' => 'Aerio',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'Alto',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'Baleno',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'Cappuccino',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'Carry',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'Celerio',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'Cultis Wagon',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'Equator',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'Esteem',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'Every Landy',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'Forenza',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'Grand Vitara',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'Ignis',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'Jimny',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'Kei',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'Kizashi',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'Liana',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'LJ',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'Reno',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'Samurai',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'SJ',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'Splash',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'Super-Carry',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'Swace',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'Swift',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'SX4',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'SX4 S-Cross',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'Twin',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'Verona',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'Vitara',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'Wagon R+',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'X-90',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'XL-7',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'XL7',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '64',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    //=============Tesla=============
    CarModel::create([
    'brand_id' => '65',
    'model' => 'Model 3',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '65',
    'model' => 'Model S',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '65',
    'model' => 'Model X',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '65',
    'model' => 'Model Y',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '65',
    'model' => 'Roadster',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '65',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    //===============Toyota======
    CarModel::create([
    'brand_id' => '66',
    'model' => '4-Runner',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Allion',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Alphard',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Auris',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Avalon',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Avensis',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Avensis Verso',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Aygo',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'C-HR',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Camry',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Camry Solara',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Carina',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Celica',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'CH-R',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Chaser',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Corolla',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Corolla Verso',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Cressida',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Cresta',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Crown',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Dyna',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Echo',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Estima',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'FJ',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'GT86',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Hiace',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Highlander',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Hilux',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Ipsum',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'iQ',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Kluger V',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Land Cruiser',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Lite-Ace',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Matrix',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Mega Cruiser',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'MR2',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Nadia',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Paseo',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Picnic',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Previa',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Prius',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Prius c',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Prius +',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Proace',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Proace City',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Proace Verso',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'RAV4',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Rush',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Scion',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Scion TC',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Sequoia',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Sienna',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Soarer',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Solara',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Starlet',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Supra',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Tacoma',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Tercel',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Tundra',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Urban Cruiser',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Venza',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Verso',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Verso-S',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Yaris',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Yaris Verso',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '66',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    //================Trabant========
    CarModel::create([
    'brand_id' => '67',
    'model' => '601',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '67',
    'model' => 'P 50/60',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '67',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    //==========Triumph========
    CarModel::create([
    'brand_id' => '68',
    'model' => 'Dolomite',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '68',
    'model' => 'GT6',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '68',
    'model' => 'Herald',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '68',
    'model' => 'Moss',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '68',
    'model' => 'Spitfire',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '68',
    'model' => 'Stag',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '68',
    'model' => 'TR1',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '68',
    'model' => 'TR2',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '68',
    'model' => 'TR3',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '68',
    'model' => 'TR4',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '68',
    'model' => 'TR5',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '68',
    'model' => 'TR6',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '68',
    'model' => 'TR7',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '68',
    'model' => 'TR8',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '68',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    //============UAZ===========
    CarModel::create([
    'brand_id' => '69',
    'model' => '2101',
    'records' => '0',
    ]);
    CarModel::create([
    'brand_id' => '69',
    'model' => '2103',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '69',
    'model' => '2106',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '69',
    'model' => '2206',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '69',
    'model' => '3151',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '69',
    'model' => '3153',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '69',
    'model' => '3162',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '69',
    'model' => '3303',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '69',
    'model' => '3741',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '69',
    'model' => '3909',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '69',
    'model' => '3962',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '69',
    'model' => '452',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '69',
    'model' => '469',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '69',
    'model' => '469 B',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '69',
    'model' => 'Hunter',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '69',
    'model' => 'Patriot',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '69',
    'model' => 'Pickup',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '69',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    //=============Volkswagen==========
    CarModel::create([
    'brand_id' => '70',
    'model' => '181',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Amarok',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Arteon',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Atlas',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Beetle',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Bora',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Buggy',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Caddy',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'California',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Caravelle',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'CC',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Corrado',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Crafter',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Cross Touran',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Derby',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'e-Crafter',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'e-Golf',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'e-Up',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Eos',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Fox',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Garbus',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Golf',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Golf Alltrack',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Golf Plus',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Golf Sportsvan',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'ID. Buzz',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'ID. Crozz',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'ID.3',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'ID.4',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'ID.5',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'IItis',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Jetta',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Kafer',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Karmann Ghia',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Lavida',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'LT',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Lupo',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Multivan',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'New Beetle',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Passat',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Passat Alltrack',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Passat CC',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Phaeton',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Polo',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Rabbit',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Routan',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Santana',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Scirocco',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Sharan',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'T-Cross',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'T-Roc',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Taro',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Tiguan',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Tiguan Allspace',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Touareg',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Touran',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Transporter',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'up!',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Vento',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '70',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    //===========VOLVO=========
    CarModel::create([
    'brand_id' => '71',
    'model' => '240',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => '244',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => '245',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => '262',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => '264',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => '340',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => '360',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => '440',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => '460',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => '480',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => '740',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => '744',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => '745',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => '760',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => '780',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => '850',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => '855',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => '940',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => '944',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => '945',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => '960',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => '965',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => 'Amazon',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => 'C30',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => 'C70',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => 'Polar',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => 'Polestar 1',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => 'Polestar 2',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => 'S40',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => 'S60',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => 'S60 Cross Country',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => 'S70',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => 'S80',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => 'S90',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => 'V40',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => 'V40 Cross Country',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => 'V50',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => 'V60',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => 'V60 Cross Country',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => 'V70',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => 'V90',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => 'V90 Cross Country',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => 'XC40',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => 'XC60',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => 'XC70',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => 'XC90',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '71',
    'model' => 'Kitas',
    'records' => '0',
    ]);
    //==========ZAZ============
    CarModel::create([
    'brand_id' => '72',
    'model' => '965',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '72',
    'model' => '966',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '72',
    'model' => '968',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '72',
    'model' => '968A',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '72',
    'model' => '968B',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '72',
    'model' => 'Tavrija',
    'records' => '0',
    ]);
    
    CarModel::create([
    'brand_id' => '72',
    'model' => 'Kitas',
    'records' => '0',
    ]);

     \App\Models\User::factory(6) -> create();
       
        
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
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Austin',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Aston Martin',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Bentley',
            'records' => '0',
        ]); 
        
        Brand::create([
            'title' => 'BMW',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Bugatti',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Buick',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Cadillac',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Chevrolet',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Chrysler',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Citroen',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Dodge',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Dacia',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Daewoo',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Daihatsu',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Ferrari',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Fiat',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Fisker',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Ford',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'GMC',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'GAZ',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Goupil',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Honda',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Hummer',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Hyundai',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Infiniti',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Isuzu',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Iveco',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Jaguar',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Jeep',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Kia',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Lada',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Lancia',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Land Rover',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Lexus',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Lincoln',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Maserati',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Maybach',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Mazda',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Mercedes-Benz',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'MG',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Microcar',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'MINI',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Mitsubishi',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Moskvich',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Nissan',
            'records' => '0',
        ]);
       
        
        Brand::create([
            'title' => 'Opel',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Peugeot',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Pontiac',
            'records' => '0',
        ]);
         
        Brand::create([
            'title' => 'Porsche',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Renault',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Rolls-Royce',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Rover',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Saab',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Scion',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Seat',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Skoda',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Smart',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Ssangyong',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Subaru',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Suzuki',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Tesla',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Toyota',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Trabant',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Triumph',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'UAZ',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Volkswagen',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Volvo',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'ZAZ',
            'records' => '0',
        ]);
        
        Brand::create([
            'title' => 'Kita',
            'records' => '0',
        ]);
    
}
}