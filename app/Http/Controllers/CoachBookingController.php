<?php

namespace App\Http\Controllers;

use App\Models\BookingService;
use App\Models\CoachBooking;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Spatie\GoogleCalendar\Event;

class CoachBookingController extends Controller
{
    //
    public function index()
    {
        $bookings = CoachBooking::with(['user', 'service'])->get();
        return view('booking', compact('bookings'));
    }

    public function store(Request $request)
    {
        $booking = CoachBooking::create([
            'title' => $request->title,
            'description' => $request->description,
            'email' => $request->email,
            'phone' => $request->phone,
            'start' => $request->start,
            'end' => $request->end,
            'user_id' => $request->user_id,
            'service_id' => $request->service_id,
        ]);

        // Send email notification
        Mail::raw("Your booking for the service '{$booking->service_booked}' titled '{$booking->title}' is confirmed for {$booking->start} to {$booking->end}.", function ($message) use ($booking) {
            $message->to($booking->email)
                ->subject('Booking Confirmation');
        });

        return response()->json($booking);
    }

    public function update(Request $request, $id)
    {
        $booking = CoachBooking::findOrFail($id);
        $booking->update($request->all());

        // Send email notification for update
        Mail::raw("Your booking for the service '{$booking->service_booked}' titled '{$booking->title}' has been updated to {$booking->start} - {$booking->end}.", function ($message) use ($booking) {
            $message->to($booking->email)
                ->subject('Booking Updated');
        });

        return response()->json($booking);
    }

    public function destroy($id)
    {
        $booking = CoachBooking::findOrFail($id);
        $booking->delete();

        // Send cancellation email
        Mail::raw("Your booking '{$booking->title}' has been canceled.", function ($message) use ($booking) {
            $message->to($booking->email)
                ->subject('Booking Canceled');
        });

        return response()->json(['message' => 'Booking deleted successfully']);
    }
    public function createBooking(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'email' => 'required|email',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ]);
    
        // Save booking to the database
        $booking = BookingService::create([
            'title' => $request->title,
            'email' => $request->email,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);
    
        // Sync booking to Google Calendar
        $event = new Event;
        $event->name = $booking->title . ' (' . $booking->email . ')';
        $event->startDateTime = Carbon::parse($booking->start_time);
        $event->endDateTime = Carbon::parse($booking->end_time);
        $event->save();

        return redirect()->back()->with('message', 'Booking created and synced to Google Calendar!');
    }
}
