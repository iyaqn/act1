<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function page1()
    {
        return view('admin.page1');
    }

    public function page2()
    {
        return view('admin.page2');
    }

    public function page3()
    {
        return view('admin.page3');
    }

    public function page4()
    {
        return view('admin.page4');
    }
}
