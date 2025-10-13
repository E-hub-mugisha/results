<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $user = User::first(); // Get the first user
        $service = Service::first(); // Get the first service

        // Check if a user and a service exist
        if (!$user || !$service) {
            $this->command->warn('Skipping BookingSeeder: No users or services found.');
            return;
        }

        // If user and service exist, create bookings
        Booking::create(['user_id' => $user->id, 'service_id' => $service->id, 'booking_date' => now()->addDays(2), 'booking_time' => '10:00:00', 'status' => 'confirmed']);
        Booking::create(['user_id' => $user->id, 'service_id' => $service->id, 'booking_date' => now()->addDays(3), 'booking_time' => '11:00:00', 'status' => 'pending']);
        Booking::create(['user_id' => $user->id, 'service_id' => $service->id, 'booking_date' => now()->addDays(4), 'booking_time' => '09:00:00', 'status' => 'cancelled']);
    }
}
