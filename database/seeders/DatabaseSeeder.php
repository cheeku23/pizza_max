<?php

namespace Database\Seeders;

use App\Models\Pizza;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Pizza::factory()->create([
            'name' => 'Margherita',
            'slug' => 'margherita',
            'description' => 'Classic pizza with tomato sauce, mozzarella, and fresh basil.',
            'price' => '8.99',
            'image' => 'https://example.com/images/margherita.jpg',
            'rating' => '4.8',
            'reviews_count' => '125',
        ]);

        Pizza::factory()->create([
            'name' => 'Pepperoni',
            'slug' => 'pepperoni',
            'description' => 'Popular pizza topped with pepperoni slices and mozzarella cheese.',
            'price' => '10.99',
            'image' => 'https://example.com/images/pepperoni.jpg',
            'rating' => '2',
            'reviews_count' => '50',
        ]);

        Pizza::factory()->create([
            'name' => 'BBQ Chicken',
            'slug' => 'bbq-chicken',
            'description' => 'Delicious pizza with BBQ sauce, grilled chicken, red onions, and cilantro.',
            'price' => '12.99',
            'image' => 'https://example.com/images/bbq-chicken.jpg',
        ]);

        Pizza::factory()->create([
            'name' => 'Veggie Delight',
            'slug' => 'veggie-delight',
            'description' => 'A healthy option loaded with bell peppers, olives, mushrooms, and onions.',
            'price' => '9.99',
            'image' => 'https://example.com/images/veggie-delight.jpg',
        ]);

        Pizza::factory()->count(8)->create();
    }
}
