<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create(Request $request) {
        $validatedData = $request->validate([
            'customer_id' => ['required', 'integer'],
            'dest' => ['required', 'string'],
            'date' => ['required', 'date'],
            'status' => ['required'],    
        ]);

        Booking::create([
            'customer_id' => $validatedData['customer_id'],
            'destination' => $validatedData['dest'],
            'date' => $validatedData['date'],
            'status' => $validatedData['status'],
        ]);

        return redirect()->route('admin.page1')->with('booking-success', 'Booking successfully created');
    }

    public function update(Request $request, $id) {
        $validatedData = $request->validate([
            'date' => ['required', 'date'],
            'dest' => ['required', 'string'],
            'status' => ['required']
        ]);

        $booking = Booking::find($id);

        $booking->update([
            'date' => $validatedData['date'],
            'destination' => $validatedData['dest'],
            'status' => $validatedData['status'],
        ]);

        $booking->save();

        return redirect()->back()->with('status', 'Booking is successfully updated');
    }

    public function delete($id) {
        $deletedBooking = Booking::find($id);

        $deletedBooking->delete();
        
        return redirect()->route('admin.page1')->with('status', 'Booking successfully deleted');
    }

    public function restore($id) {
        Booking::withTrashed()
                ->where('id', $id)
                ->restore();

        return redirect()->route('admin.page1')->with('status', 'Booking successfully restored');
    }

    public function permaDelete($id) {
          Booking::withTrashed()
                ->where('id', $id)
                ->forceDelete();
        
        return redirect()->route('admin.page1')->with('status', 'Booking successfully permanently deleted');
    }
}
