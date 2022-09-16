<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Country>
 */
class CountryFactory extends Factory
{
    /**
     * Define the model's default state.

     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => factory('App\Models\User'),
            'name' => $faker->Address(),
            'ISO' => $faker->Address()
        ];
    }
}
