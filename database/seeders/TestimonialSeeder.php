<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Testimonial::create(['client_name' => 'John Doe', 'testimonial' => 'Amazing experience, highly recommended!', 'rating' => 5]);
        Testimonial::create(['client_name' => 'Jane Smith', 'testimonial' => 'Very supportive and effective training sessions.', 'rating' => 4]);
        Testimonial::create(['client_name' => 'Alice Brown', 'testimonial' => 'Helped me reach my fitness goals.', 'rating' => 5]);
    }
}
