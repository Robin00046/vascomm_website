<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\CustomerPasswordMail;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    // resgister user 
    public function registrasi(Request $request)
    {
        // dd($request->all());
        // validate request
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);
        $password = substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyz', 8)), 0, 8);
        // dd($password);
        // create user
        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => bcrypt($password),
        ]);
        $user->assignRole('customer');
        $data = ['password' => $password];
        Mail::to($request->email)->send(new CustomerPasswordMail($data)); // assuming you have created a Mailable
        redirect()->route('login')->with('success', 'User created successfully. Password sent to user email');
    }

    // login user

    public function login(Request $request)
    {
        // validate request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // check if user exist
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'User does not exist');
        }

        // check if password is correct
        if (!auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return back()->with('error', 'Invalid password');
        }

        return redirect()->route('dashboard')->with('success', 'Login successful');
    }

    // logout user
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
