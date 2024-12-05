<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/', function () {
    return view('home'); // Página inicial
});

Route::get('/events', function () {
    return view('events'); // Página de eventos
});

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/myevents', function () {
    return view('myevents');
})->name('myevents');

Route::get('/editmyevent', function () {
    return view('editmyevent');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');
// routes/web.php


// register

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// login

use App\Http\Controllers\Auth\LoginController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
