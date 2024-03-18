<?php

use App\Mail\WelcomeMail;
use App\Mail\CustomerPasswordMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/registrasi', function () {
    return view('registrasi');
});
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/logout', function () {
    auth()->logout();
    return redirect()->route('login')->with('success', 'Logout successful');
})->name('logout');

Route::post('/registrasi', [AuthController::class, 'registrasi'])->name('registrasi.post');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/test-email', function () {
    $data = ['password' => '123456'];
    Mail::to('latihancoba95@gmail.com')->send(new CustomerPasswordMail($data)); // assuming you have created a Mailable
});

Route::resource('products', ProductsController::class);
