<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'date' => $this->faker->dateTimeBetween('-20 years', '-2 months'),
            'price'=>$this->faker->randomNumber(6),
            'region'=>$this->faker->sentence(rand(2,3),true),
        ];
    }
}
