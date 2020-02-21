<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Customer;

class CustomerController extends Controller
{
    public function index(Customer $customer){

        $customer = Customer::all();

        return view('customer.customers', compact('customer'));
    }
}
