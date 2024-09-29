<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Customer;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string'],
            'dest' => ['required', 'string'],
            'date' => ['required', 'string'],
            'status' => ['required'],    
        ]);

        $customer = Customer::create([
            'name' => $validatedData['name'],
        ]);

        $booking = Booking::create([
            'customer_id' => $customer->id,
            'destination' => $validatedData['dest'],
            'date' => $validatedData['date'],
            'status' => $validatedData['status'],
        ]);

        return redirect()->route('admin.page1')->with('status', 'Booking successfully created');
    }
}
