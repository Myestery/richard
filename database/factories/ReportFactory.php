<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\report>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'blog_id' => $this->faker->numberBetween(1,10),
            'comment' => $this->faker->paragraph(),
            'media_url' => $this->faker->imageUrl()
        ];
    }
}
