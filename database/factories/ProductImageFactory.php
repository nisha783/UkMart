<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductImage>
 */
class ProductImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Select a random product
        $product = Product::inRandomOrder()->first();
        $username = $this->faker->userName;
        $timestamp = time();
        $fileName = "{$username}_{$timestamp}.jpg";

        $filePath = public_path('storage/products/' . $fileName);
        $imageUrl = 'https://i.pravatar.cc/450';
        $imageContent = file_get_contents($imageUrl);
        file_put_contents($filePath, $imageContent);


        return [
            'product_id' => $product->id,
            'image' => 'products/' . $fileName,
            'is_default' => $product->images->where('is_default', true)->count() ? false : true,
        ];
    }
}
