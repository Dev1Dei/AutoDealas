<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'tags' => 'great, nice awesome',
            'Type' => $this->faker->sentence(),
            'tags' => 'awesome',
            'make' => $this->faker->sentence(),
            'model' => $this->faker->sentence(),
            'engine' => $this->faker->sentence(), //'1.8 l. 90KW (122 Ag)',
            'fuelType' => $this->faker->sentence(),
            'color' => $this->faker->colorName(),
            'transmition' => $this->faker->sentence(),
            'FWD/AWD/RWD' => $this->faker->randomAscii(),
            'defects' => $this->faker->sentence(),
            'wheelLocation' => $this->faker->sentence(),
            'numberOfDoors' => '4/5',
            'numberOfSeats' => '5',
            'VIN' => $this->faker->sentence(),
            'price' => '1500',
            'year' => $this->faker->year(),
            'city' => $this->faker->city(),
            'country' => $this->faker->country(),
            'TPass' => $this->faker->date(),
            'traits' => 'El.Langai, Kablys, Klimato kontrolė, Lengvo lydinio ratlankiai, Audio grotuvas, Oro pagalvės, Kritulių jutiklis, Rūko žibintai, Serviso knygelė',
            'description' => $this->faker->paragraph(5),
            'sellerNumber' => '+37067976612',
        ];
    }
}
