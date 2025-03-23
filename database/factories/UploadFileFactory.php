<?php

namespace Database\Factories;

use App\Models\UploadFile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UploadFile>
 */
class UploadFileFactory extends Factory
{
    protected $model = UploadFile::class;

    public function definition(): array
    {
        return [
            'file_name' => $this->faker->word() . '.' . $this->faker->fileExtension(),
            'file_path' => 'uploads/' . $this->faker->uuid() . '.' . $this->faker->fileExtension(),
            'file_type' => $this->faker->randomElement(['image/png', 'image/jpeg', 'application/pdf', 'text/plain'])
        ];
    }
}
