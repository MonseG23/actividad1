<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gender>
 */
class GenderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'universe_id'  =>  fake()->numberBetween(1, 2),
            'gender_id'    =>  fake()->numberBetween(1, 3),
            'name'         =>  fake()->name(),
            'real_name'    =>  fake()->userName(),
            'picture'      =>  fake()->imagerUrl(640, 480, 'superheroes'),
        ];
    }
}
