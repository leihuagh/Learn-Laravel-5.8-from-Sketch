<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    public function list()
    {
        $customers = Customer::all();

        return view('customers.list', [
            'customers' => $customers,
        ]);
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|min:3',
        ]);

        $customer = new Customer();
        $customer->name = request('name');
        $customer->save();

        return back();
    }
}
