<?php

namespace Database\Factories;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CartDetail>
 */
class CartDetailFactory extends Factory
{
    protected $model = CartDetail::class;
    public function definition(): array
    {
        return [
            'cart_id' => Cart::inRandomOrder()->first()->id ?? 1, 
            'product_id' => Product::inRandomOrder()->first()->id ?? 1, 
            'quantity' => $this->faker->numberBetween(1, 5),
        ];
    }
}
