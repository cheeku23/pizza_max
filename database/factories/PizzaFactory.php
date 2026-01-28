<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pizza>
 */
class PizzaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 5, 50),
            'image' => $this->faker->imageUrl(640, 480, 'food', true),
            'rating' => $this->faker->randomFloat(1, 1, 5),
            'reviews_count' => $this->faker->numberBetween(0, 500),

            
        ];
    }
}
