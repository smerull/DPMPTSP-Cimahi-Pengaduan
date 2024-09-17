<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

use App\Http\Controllers\AuthController;

Route::get('login', function () {
    return view('login');
})->name('login');

Route::post('login', [AuthController::class, 'login'])->name('login.submit');

Route::get('register', function () {
    return view('auth.register');
})->name('register');

Route::get('password/reset', function () {
    return view('auth.passwords.email');
})->name('password.request');

use App\Http\Controllers\Auth\RegisterController;

// Tampilkan formulir pendaftaran
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Proses pendaftaran
Route::post('register', [RegisterController::class, 'register']);
Route::get('/home', function () {
    return view('user/home');
});
Route::get('/admin', function () {
    return view('admin/admin');
});
Route::get('/user', function () {
    return view('admin/user');
});
Route::get('/kontak', function () {
    return view('admin/kontak');
});
Route::get('/pengaduan', function () {
    return view('admin/pengaduan');
});
Route::get('/sop', function () {
    return view('admin/sop');
});
