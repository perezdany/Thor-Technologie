<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'pseudo' => $this->faker->name(),
            'pass' => 'blablabla',
            'admin_email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
