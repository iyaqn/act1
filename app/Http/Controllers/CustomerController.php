<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;

class CustomerController extends Controller
{
    public function create(Request $request) {
        $validatedData = $request->validate([
            'name' => ['required', 'string'],
            'id' => ['required', 'mimes:png,jpg,jpeg'],
        ]);

        $image = $validatedData['id'];
        $imageNewname = hexdec(uniqid()).".".$image->getClientOriginalExtension();
        $image->move("images/id/", $imageNewname);
        Image::read("images/id/".$imageNewname)->resize(50, 50)->save();

        $idUrl = "images/id/".$imageNewname;

        Customer::create([
            'name' => $validatedData['name'],
            'idUrl' => $idUrl,
        ]);

        return redirect()->route('admin.page1')->with('customer-success', 'Customer successfully created');
    }
}
