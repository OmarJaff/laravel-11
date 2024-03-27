<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
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
            'title' => fake()->word(5),
            'post' => fake()->paragraph(4),
            'author_id' => User::factory(),
            'comment_id' => Comment::factory(),
            'tag_id'=>Tag::factory(),
        ];
    }
}
