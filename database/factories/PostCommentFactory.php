<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\PostComment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostComment>
 */
class PostCommentFactory extends Factory
{
    protected $model = PostComment::class;
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id ?? 1,
            'post_id' => Post::inRandomOrder()->first()->id ?? 1, 
            'comment' => $this->faker->paragraph(),
        ];
    }
}
