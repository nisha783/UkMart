<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItem>
 */
class OrderItemFactory extends Factory
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

        // Randomly decide whether to assign a variant or not
        $variant = $this->faker->boolean(50) 
            ? ProductVariant::where('product_id', $product->id)->inRandomOrder()->first()
            : null;

        $price = $variant ? $variant->price : $product->price; // Use variant price if available, otherwise product price
        $quantity = $this->faker->numberBetween(1, 5);
        $total = $price * $quantity;

        return [
            'order_id' => Order::factory(),
            'product_id' => $product->id,
            'variant_id' => $variant ? $variant->id : null,
            'quantity' => $quantity,
            'price' => $price,
            'total' => $total,
        ];
    }
}
