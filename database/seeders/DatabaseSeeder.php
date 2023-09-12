<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             ReportSeeder::class,
            LGASeeder::class,
        ]);
        \App\Models\User::factory()->create([
            'email' => 'richard@test.com',
        ]);
        \App\Models\User::factory()->create([
            'email' => 'admin@test.com',
            'is_admin' => true,
        ]);
       
        \App\Models\User::factory(10)->create();
        $blogData = [
            [
                'title' => "The Art of Mindful Living",
                'description' => "Explore the practices and benefits of mindful living to achieve greater peace and happiness in your daily life.",
            ],
            [
                'title' => "A Journey Through Culinary Delights",
                'description' => "Embark on a gastronomic adventure as we take you through the world's most delectable cuisines and their unique flavors.",
            ],
            [
                'title' => "Unveiling the Wonders of Space Exploration",
                'description' => "Dive into the mysteries of the universe and learn about the latest advancements in space exploration and astronomy.",
            ],
            [
                'title' => "Mastering the Art of Time Management",
                'description' => "Discover effective time management strategies that can help you boost productivity and achieve a better work-life balance.",
            ],
            [
                'title' => "The Power of Positive Psychology",
                'description' => "Learn how the principles of positive psychology can enhance your mental well-being and contribute to a more fulfilling life.",
            ],
            [
                'title' => "Exploring Ancient Historical Sites",
                'description' => "Take a virtual tour of ancient historical sites around the world and uncover the stories and cultures that shaped our past.",
            ],
            [
                'title' => "Navigating Career Transitions with Confidence",
                'description' => "Get expert advice on successfully navigating career transitions, from switching industries to climbing the corporate ladder.",
            ],
            [
                'title' => "Capturing Life's Moments Through Photography",
                'description' => "Discover photography tips and tricks to capture the beauty of everyday life and turn ordinary moments into extraordinary memories.",
            ],
            [
                'title' => "Sustainable Living: Eco-Friendly Practices",
                'description' => "Explore eco-friendly lifestyle choices and sustainable practices that can help preserve the planet for future generations.",
            ],
            [
                'title' => "The Evolution of Artificial Intelligence",
                'description' => "Delve into the fascinating history and future possibilities of artificial intelligence and its impact on various industries.",
            ],
            [
                'title' => "Embracing Mind-Body Wellness",
                'description' => "Learn about holistic approaches to wellness that focus on nurturing both the mind and body for overall health and vitality.",
            ],
            [
                'title' => "Discovering Hidden Gems: Travel Off the Beaten Path",
                'description' => "Uncover lesser-known travel destinations that offer unique experiences and allow you to escape the crowds.",
            ],
            [
                'title' => "The Art of Effective Communication",
                'description' => "Enhance your communication skills by understanding the nuances of verbal and nonverbal communication in various contexts.",
            ],
            [
                'title' => "Cultivating Inner Resilience in Challenging Times",
                'description' => "Explore strategies for building inner resilience and coping with adversity to emerge stronger from life's challenges.",
            ],
            [
                'title' => "Modern Parenting: Navigating the Digital Age",
                'description' => "Get insights into the challenges and opportunities of parenting in the digital age, from screen time to online safety.",
            ],
            [
                'title' => "The World of Virtual Reality: Beyond the Headset",
                'description' => "Dive into the applications of virtual reality beyond gaming, from healthcare and education to architecture and entertainment.",
            ],
            [
                'title' => "Elevating Your Home Workspace for Productivity",
                'description' => "Discover home office setup tips and design ideas that can boost your focus, creativity, and productivity while working remotely.",
            ],
            [
                'title' => "Culinary Adventures: Exploring Global Street Food",
                'description' => "Embark on a culinary journey sampling street food delicacies from various cultures and savor the authentic flavors of the world.",
            ],
            [
                'title' => "The Science of Sleep and Optimal Rest",
                'description' => "Learn about the importance of sleep, sleep cycles, and effective strategies for achieving restful nights and revitalized days.",
            ],
            [
                'title' => "Unlocking Creativity: Embrace Your Inner Artist",
                'description' => "Tap into your creative potential by exploring different art forms and practices that can ignite your imagination and innovation.",
            ],
        ];
        foreach ($blogData as $blog) {
            \App\Models\Blog::factory()->create([
                'title' => $blog['title'],
                'description' => $blog['description'],
            ]);
        }        
         foreach (\App\Models\Blog::all() as $blog) {
                \App\Models\Comment::factory(10)->create([
                    'blog_id' => $blog->id,
                ]);
            }

    
    }
}
