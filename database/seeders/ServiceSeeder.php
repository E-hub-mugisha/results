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
        Service::create(['name' => 'Group Fitness', 'description' => 'Group fitness classes for all levels.', 'price' => 30.00]);
        Service::create(['name' => 'Wellness Coaching', 'description' => 'Guidance on nutrition, lifestyle, and mental wellness.', 'price' => 40.00]);
    }
}
