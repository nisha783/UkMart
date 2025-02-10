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
    public function definition(): array
    {
        $name = $this->faker->unique()->words(3, true);
        $price = $this->faker->randomFloat(2, 10, 1000);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'mini_description' => $this->faker->paragraphs(1, true),
            'description' => $this->faker->paragraphs(4, true),
            'price' => $price,
            'sale_price' => $this->faker->boolean(30) ? $price * 0.8 : null,
            'max_price' => $price * 2,
            'sku' => $this->faker->unique()->ean8(),
            'stock' => $this->faker->numberBetween(0, 100),
            'featured' => $this->faker->boolean(20),
            'status' => $this->faker->randomElement(['draft', 'published', 'out_of_stock']),
            'meta_title' => $this->faker->words(4, true),
            'meta_description' => $this->faker->sentence(),
            'weight' => $this->faker->randomFloat(2, 0.1, 10),
            'dimensions' => json_encode([
                'length' => $this->faker->randomFloat(2, 5, 50),
                'width' => $this->faker->randomFloat(2, 5, 50),
                'height' => $this->faker->randomFloat(2, 5, 50),
            ]),
            'tax_class' => $this->faker->randomElement(['standard', 'reduced', 'zero'])
        ];
    }
}
