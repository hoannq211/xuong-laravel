<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductComment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductComment>
 */
class ProductCommentFactory extends Factory
{
    protected $model = ProductComment::class;
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id ?? 1,
            'product_id' => Product::inRandomOrder()->first()->id ?? 1,
            'rating' => $this->faker->numberBetween(1, 5), // Đánh giá từ 1 đến 5 sao
            'comment' => $this->faker->sentence(10), // Bình luận ngẫu nhiên
        ];
    }
}
