<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\UploadFile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    protected $model = Brand::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'logo' => UploadFile::inRandomOrder()->first()->id ?? 1,
            'description' => $this->faker->sentence(),
        ];
    }
}
