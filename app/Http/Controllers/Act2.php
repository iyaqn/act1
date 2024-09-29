<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class Act2 extends Controller
{
    public $bookingDeets = [
            [
            'id' => 'BK1253',
            'name' => 'Maya Hawke',
            'email' => 'chaosangel@gmail.com',
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
        $bookingDeets = Booking::paginate(15);
        return view('admin.page1', ['booking' => $bookingDeets]);
    }

    public function showDetails($index) {
        return view('admin.bookingDetails', ['details' => Booking::find($index)]);
    }

    public $galleryImg = [
        [
        'img' => 'https://i.pinimg.com/736x/b7/90/9e/b7909e1619d107567a5f6b3e2d74c137.jpg',
        'title' => 'Beautiful Beach',
        'loc' => 'Sun Siyam Iru Fushi, Maldives',
        'rates' => '⭐⭐⭐⭐⭐'
        ],

        [
        'img' => 'https://i.pinimg.com/474x/99/f7/35/99f7353d356a8b68a480bb0454b8fe83.jpg',
        'title' => 'Mountain View',
        'loc' => 'Alabama Hills, North Carolina, USA',
        'rates' => '⭐⭐⭐⭐'
        ],

        [
        'img' => 'https://i.pinimg.com/736x/f8/19/97/f81997a8b4517f8d5371f799e293ffda.jpg',
        'title' => 'Sunset Over the Ocean',
        'loc' => 'Paros Island, Greece',
        'rates' => '⭐⭐⭐⭐'
        ]

        ]; 

        public function showGallery(){
            return view('guest.page5', ['gallery' => $this->galleryImg]);
        }

        public function showGalleryImg($index) {
            return view('guest.galleryDetails', ['gallerydeets' => $this->galleryImg[$index]]);
        }
    
}
