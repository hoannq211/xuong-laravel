<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\UploadFile;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    public function definition(): array
    {
        $name = $this->faker->unique()->words(3, true);
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 10, 1000), // Giá từ 10 đến 1000
            'discount' => $this->faker->randomFloat(2, 0, 100), // Giảm giá từ 0 đến 100
            'stock' => $this->faker->numberBetween(0, 500), // Số lượng trong kho từ 0-500
            'category_id' => Category::inRandomOrder()->first()->id ?? 1, // Chọn ngẫu nhiên hoặc tạo mới
            'brand_id' => Brand::inRandomOrder()->first()->id ?? 1, // Chọn ngẫu nhiên hoặc tạo mới
            'img_cover' => UploadFile::inRandomOrder()->first()->id ?? 1, // Chọn ngẫu nhiên một ảnh từ bảng upload_files
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
