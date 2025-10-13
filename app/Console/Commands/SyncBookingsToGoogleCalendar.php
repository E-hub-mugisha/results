<?php

namespace App\Console\Commands;

use App\Models\BookingService;
use Illuminate\Console\Command;
use Spatie\GoogleCalendar\Event;
use Carbon\Carbon;

class SyncBookingsToGoogleCalendar extends Command
{
    protected $signature = 'bookings:sync';
    protected $description = 'Sync all bookings to Google Calendar';

    public function handle()
    {
        $bookings = BookingService::all();

        foreach ($bookings as $booking) {
            $startDateTime = Carbon::parse($booking->start_time);
            $endDateTime = Carbon::parse($booking->end_time);

            // Create a new event
            $event = new Event;

            // Set event properties
            $event->name = $booking->title . ' (' . $booking->email . ')';
            $event->startDateTime = $startDateTime;
            $event->endDateTime = $endDateTime;
            $event->description = "Client Email: " . $booking->email;

            // Save the event to Google Calendar
            $event->save();
        }

        $this->info('All bookings have been synced to Google Calendar with emails.');
    }
}
