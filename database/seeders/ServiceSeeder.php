<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Service::create(['name' => 'Personal Training', 'description' => 'One-on-one personalized training sessions.', 'price' => 50.00]);
        Service::create(['name' => 'Group training', 'description' => 'Group fitness classes for all levels.', 'price' => 30.00]);
        Service::create(['name' => 'Rehub', 'description' => 'Rehub is a platform for recovery and wellness, offering tools and resources to rejuvenate your mind and body. Achieve balance, improve performance, and feel your best!', 'price' => 40.00]);
        Service::create(['name' => 'Ice bath', 'description' => 'Ice Bath Boost recovery with ice baths! Reduce soreness, ease inflammation, and feel refreshed after workouts. Perfect for athletes and wellness enthusiasts.', 'price' => 40.00]);
        Service::create(['name' => 'Karate Kid', 'description' => 'Karate is a martial art focused on discipline, self-defense, and physical fitness. It combines powerful strikes, blocks, and kicks to build strength, confidence, and mental focus. Perfect for all ages!', 'price' => 40.00]);
    }
}
