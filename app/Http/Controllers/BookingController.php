<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'dest' => 'required|string|max:255',
            'date' => 'required|date',
            'status' => 'required|string|in:Pending,Confirmed,Cancelled',
            'amount' => 'nullable|numeric',
            'payment_status' => 'nullable|string|in:Pending,Paid,Cancelled',
        ]);
    
        // Find the booking by ID and update its details
        $booking = Booking::findOrFail($id);
        $booking->update($request->all());
    
        // Redirect back to the booking list or a success page
        return redirect()->route('admin.page1')->with('success', 'Booking details updated successfully.');
    }
    }
