<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'body' => fake()->text(),
            'image_path' => 'images/MfW8BoRibRhCgmrid31ZMuuIQlNi8YiJHVIZYghn.jpg',
            'user_id' => 11
        ];
    }
}
