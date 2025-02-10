<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->words(2, true);
        $username = $this->faker->userName;
        $timestamp = time();
        $fileName = "{$username}_{$timestamp}.jpg";

        $filePath = public_path('storage/categories/' . $fileName);
        $imageUrl = 'https://i.pravatar.cc/150';  // Use any random image URL generator here
        $imageContent = file_get_contents($imageUrl);
        file_put_contents($filePath, $imageContent);
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->paragraph(),
            'parent_id' => null,
            'featured' => $this->faker->boolean(20),
            'menu' => $this->faker->boolean(70),
            'image' => 'categories/' . $fileName,
            'meta_title' => $this->faker->words(4, true),
            'meta_description' => $this->faker->sentence()
        ];
    }
}
