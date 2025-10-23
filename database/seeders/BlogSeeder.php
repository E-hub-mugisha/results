<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'title' => '10 Simple Yoga Poses for Beginners to Start Today',
                'slug' => Str::slug('10 Simple Yoga Poses for Beginners to Start Today'),
                'author' => 'Eliana Grace',
                'image' => 'assets/images/blog/blog-img1.jpg',
                'content' => 'Starting your yoga journey can be exciting and rewarding. In this post, we’ll explore 10 beginner-friendly yoga poses that will help you build flexibility, strength, and peace of mind. Each pose includes step-by-step guidance to ensure proper form and breathing.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '5 Nutrition Tips for a Healthier Lifestyle',
                'slug' => Str::slug('5 Nutrition Tips for a Healthier Lifestyle'),
                'author' => 'Alicia Brown',
                'image' => 'assets/images/blog/blog-img2.jpg',
                'content' => 'Good nutrition is the foundation of a healthy life. This article provides five simple yet effective tips for improving your diet, boosting energy, and maintaining long-term wellness.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Mental Health Benefits of Regular Exercise',
                'slug' => Str::slug('The Mental Health Benefits of Regular Exercise'),
                'author' => 'Brooklyn Smith',
                'image' => 'assets/images/blog/blog-img3.jpg',
                'content' => 'Exercise doesn’t just strengthen your body — it also boosts your mental health. Learn how regular physical activity helps reduce anxiety, depression, and stress, while improving mood and focus.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'How to Stay Consistent with Your Fitness Routine',
                'slug' => Str::slug('How to Stay Consistent with Your Fitness Routine'),
                'author' => 'Natalie Stone',
                'image' => 'assets/images/blog/blog-img4.jpg',
                'content' => 'Consistency is the key to achieving your fitness goals. Discover practical strategies to stay motivated, overcome challenges, and make exercise a daily habit.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Top 7 Benefits of Meditation You Need to Know',
                'slug' => Str::slug('Top 7 Benefits of Meditation You Need to Know'),
                'author' => 'Davis Miller',
                'image' => 'assets/images/blog/blog-img5.jpg',
                'content' => 'Meditation has been practiced for thousands of years, but its benefits are more relevant than ever. From stress reduction to improved focus and better sleep, this guide covers the top reasons to make meditation part of your life.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Creating a Balanced Workout Plan for Better Results',
                'slug' => Str::slug('Creating a Balanced Workout Plan for Better Results'),
                'author' => 'Aliba Johnson',
                'image' => 'assets/images/blog/blog-img6.jpg',
                'content' => 'A balanced workout plan includes strength, cardio, and recovery. Learn how to design a routine that fits your lifestyle, prevents burnout, and helps you reach your goals efficiently.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('blogs')->insert($blogs);
    }
}
