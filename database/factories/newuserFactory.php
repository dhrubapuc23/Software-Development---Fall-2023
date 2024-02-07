<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class newuserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'age' => $this->faker->numberBetween($min = 18, $max = 65),
            'city' => $this->faker->city
        ];
    }
}
