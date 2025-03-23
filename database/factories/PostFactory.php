<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\UploadFile;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    public function definition(): array
    {
        $title = $this->faker->sentence(6);
        return [
            'title' => $title, 
            'content' => $this->faker->paragraphs(3, true), // Nội dung bài viết
            'slug' => Str::slug($title) . '-' . Str::random(5), // Tạo slug ngẫu nhiên
            'image' => UploadFile::inRandomOrder()->first()->id ?? 1, 
            'user_id' => User::inRandomOrder()->first()->id ?? 1
        ];
    }
}
