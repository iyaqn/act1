<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Act2 extends Controller
{
    public $bookingDeets = [
            [
            'id' => 'BK1253',
            'name' => 'Ariana Grande',
            'email' => 'arianagrande@gmail.com',
            'phone' => '029387483',
            'amount' => '$1300.00',
            'dest' => 'New York, USA',
            'date' => '2024-08-18',
            'time' => '16:24:26',
            'status' => 'Pending',
            'action' => 'Confirm',
            'deets' => 'View Details'
            ],
            [
                'id' => 'BK1254',
                'name' => 'Lee Heeseung',
                'email' => 'leeheeseung1015@gmail.com',
                'phone' => '010152001',
                'amount' => '$1600.00',
                'dest' => 'Seoul, Korea',
                'date' => '2024-08-19',
                'time' => '10:00:47',
                'status' => 'Confirmed',
                'action' => 'Confirm',
                'deets' => 'View Details'
            ],
            [
                'id' => 'BK1255',
                'name' => 'Alamat Jao',
                'email' => 'alamatjaoie@gmail.com',
                'phone' => '099912345678',
                'amount' => '₱2300.00',
                'dest' => 'Manila, Philippines',
                'date' => '2024-08-20',
                'time' => '02:54:16',
                'status' => 'Cancelled',
                'action' => 'Confirm',
                'deets' => 'View Details'
            ]

        ];

    public function show(){
        return view('admin.page1', ['booking' => $this->bookingDeets]);
    }

    public function showDetails($index) {
        return view('admin.bookingDetails', ['details' => $this->bookingDeets[$index]]);
    }
    
}
