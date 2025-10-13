<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use App\Models\Service;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // Display a listing of the bookings
    public function index()
    {
        $bookings = Booking::with('user', 'service')->get();
        return view('bookings.index', compact('bookings'));
    }

    // Show the form for creating a new booking
    public function create()
    {
        $users = User::all();
        $services = Service::all();
        return view('bookings.create', compact('users', 'services'));
    }

    // Store a newly created booking in storage
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'service_id' => 'required|exists:services,id',
            'booking_date' => 'required|date',
            'booking_time' => 'required',
            'status' => 'required|string',
        ]);

        Booking::create($request->all());

        return redirect()->route('bookings.index')->with('success', 'Booking created successfully.');
    }

    // Display the specified booking
    public function show(Booking $booking)
    {
        return view('bookings.show', compact('booking'));
    }

    // Show the form for editing the specified booking
    public function edit(Booking $booking)
    {
        $users = User::all();
        $services = Service::all();
        return view('bookings.edit', compact('booking', 'users', 'services'));
    }

    // Update the specified booking in storage
    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'service_id' => 'required|exists:services,id',
            'booking_date' => 'required|date',
            'booking_time' => 'required',
            'status' => 'required|string',
        ]);

        $booking->update($request->all());

        return redirect()->route('bookings.index')->with('success', 'Booking updated successfully.');
    }

    // Remove the specified booking from storage
    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('bookings.index')->with('success', 'Booking deleted successfully.');
    }
}
