<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
// routes/web.php




