<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestPageController extends Controller
{
    public function page1()
    {
        return view('guest.page1');
    }

    public function page2()
    {
        return view('guest.page2');
    }

    public function page3()
    {
        return view('guest.page3');
    }

    public function page4()
    {
        return view('guest.page4');
    }
    
    public function page5()
    {
        return view('guest.page5');
    }
}

