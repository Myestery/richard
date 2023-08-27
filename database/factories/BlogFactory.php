<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(1),
            'image' => $this->faker->randomElement([
                'https://cdn.punchng.com/wp-content/uploads/2023/08/26154705/Zulum-addressing-the-youth-corp-members-at-the-reopened-orientation-camp-in-Maiduguri-Saturday.jpeg',
                'https://cdn.punchng.com/wp-content/uploads/2023/08/26155025/Before-addressing-them-he-inspected-a-guard-of-honour-mounted-by-them.-300x200.jpeg',
                'https://cdn.punchng.com/wp-content/uploads/2023/07/31184254/Wike-4.jpg',
                'https://cdn.punchng.com/wp-content/uploads/2023/08/25193234/A.jpg'
            ]),
            'author_id' => $this->faker->randomNumber(1, 10),
            'content' => $this->faker->paragraphs(5, true),
            'status' => 'published',
            // all states in nigeria
            'lga_id' => $this->faker->randomNumber(1, 37),
        ];
    }
}
