<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/login', function () {
    return redirect()->route('dashboard');
})->name('login.submit');

Route::post('/register', function () {
    return redirect()->route('dashboard');
})->name('register.submit');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/profile', function () {
    return view('profile'); // Asegúrate de que el archivo se llama profile.blade.php
});

Route::get('/create_event', function () {
    return view('create_event'); // Asegúrate de que el archivo se llama profile.blade.php
});

Route::get('/join_event', function () {
    return view('join_event'); // Asegúrate de que el archivo se llama profile.blade.php
});


// routes/web.php




