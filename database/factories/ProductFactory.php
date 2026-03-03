<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {
        $adjectives = ['Premium', 'Vintage', 'Eco-friendly', 'Ultra-soft', 'Industrial', 'Handmade'];
        $colors = ['Midnight Blue', 'Crimson Red', 'Forest Green', 'Matte Black', 'Sahara Gold'];
        $materials = ['Cotton', 'Leather', 'Stainless Steel', 'Bamboo', 'Recycled Plastic'];
        $products = ['T-Shirt', 'Backpack', 'Coffee Mug', 'Desk Lamp', 'Journal', 'Water Bottle'];
        $sizes = ['S', 'M', 'L', 'XL', '24oz', 'Standard'];

        // Example combination: "Premium Crimson Red Leather Backpack (Large)"
        $name = sprintf(
            '%s %s %s %s (%s)',
            fake()->randomElement($adjectives),
            fake()->randomElement($colors),
            fake()->randomElement($materials),
            fake()->randomElement($products),
            fake()->randomElement($sizes)
        );

        return [
            'name'     => $name,
            'price'    => fake()->randomFloat(2, 5, 1000),
            'category' => fake()->optional(0.8)->randomElement(['Apparel', 'Accessories', 'Home Office', 'Tech']),
        ];
    }
}
