<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $user = User::first(); // Assume the first user is the author for simplicity

        Post::create(['user_id' => $user->id, 'title' => 'Top 10 Fitness Tips', 'content' => 'Here are the top 10 fitness tips to improve your health...', 'status' => 'published']);
        Post::create(['user_id' => $user->id, 'title' => 'How to Maintain Wellness', 'content' => 'Wellness is a journey, not a destination. Here’s how to maintain it...', 'status' => 'published']);
        Post::create(['user_id' => $user->id, 'title' => 'Benefits of Group Fitness', 'content' => 'Group fitness is not only fun, but it also has several health benefits...', 'status' => 'draft']);
    }
}
