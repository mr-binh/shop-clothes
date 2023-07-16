<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name='product'.Str::random(30);
        $slug=Str::slug($name, '-');
        return [
            'name' => $name,
            'slug' => $slug,
            'description' => fake()->text(200),
            'image' => 'https://picsum.photos/200/300',
            'price' => fake()->numberBetween(100000, 1000000),
            'status' => fake()->numberBetween(0, 1),
            'hot' => fake()->numberBetween(0, 1),
            'sold' => fake()->numberBetween(0, 100),
            'category_id' => fake()->numberBetween(1, 5),
        ];
    }
}
