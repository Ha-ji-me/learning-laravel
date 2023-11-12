<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $date = $this->faker->dateTimeBetween('-1year');

        return [
            'content' => $this->faker->text(),
            'user_id' => User::factory(),
            'post_id' => Post::factory(),
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
