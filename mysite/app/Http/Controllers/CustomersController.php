<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list()
    {
        $customers = [
            'John Lee',
            'Lynda Smith',
            'Howard Tammaro'
        ];

        return view('customers.list', [
            'customers' => $customers,
        ]);
    }
}
