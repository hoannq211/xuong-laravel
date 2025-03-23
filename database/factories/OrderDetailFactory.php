<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderDetail>
 */
class OrderDetailFactory extends Factory
{
    protected $model = OrderDetail::class;
    public function definition(): array
    {
        $product = Product::inRandomOrder()->first() ?? Product::factory()->create();
        $quantity = $this->faker->numberBetween(1,10);
        $price = $product->price;
        return [
            'order_id' => Order::inRandomOrder()->first() ?? Order::factory()->create(),
            'product_id' => $product->id,
            'quantity' => $this->faker->numberBetween(1, 10),
            'price' =>  $price,
            'subtotal' => $quantity * $price
        ];
    }
}
