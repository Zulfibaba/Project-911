<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Guest;
use App\Models\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('dashboard.booking.index', compact('bookings'));
    }
    public function create($id)
    {
        $room = Room::findOrFail($id);
        $guests = Guest::all();

        return view('dashboard.booking.create', compact('room', 'guests'));
    }

    public function store(Request $request)
    {
        Booking::create($request->validate([
            'room_id' => 'required',
            'guest_id' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
            'adults' => 'required',
            'children' => 'required',
            'nights' => 'required',
            'status' => 'required',
            'payment_status' => 'required',
            'payment_method' => 'required',
            'payment_payload' => 'required',
            'payment_response' => 'required',
            'payment_amount' => 'required',
            'payment_currency' => 'required',
        ]));
        return redirect()->route('admin.booking.index')->with('success', 'Booking created successfully');
    }

}