<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // get all customers
    public function index()
    {
        
        return view('customers.index', compact('customers'));
    }
}
