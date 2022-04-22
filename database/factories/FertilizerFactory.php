<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fertilizer>
 */
class FertilizerFactory extends Factory
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
            'norm_nitrogen' => $this->faker->randomFloat(2, 10, 20),
            'norm_phosphorus' => $this->faker->randomFloat(2, 10, 20),
            'norm_potassium' => $this->faker->randomFloat(2, 10, 20),
            'crops_id'=>rand(1,5),
            'area'=>$this->faker->sentence(rand(2,3),true),
            'price'=>$this->faker->randomNumber(6),
            'description'=>$this->faker->sentence(rand(2,3),true),
            'purpose'=>$this->faker->sentence(rand(2,3),true),

        ];
    }
}
