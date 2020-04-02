<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customer', compact('customers'));
    }

    public function store(Request $request)
    {
        Customer::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
        ]);

        return back();
    }
}
