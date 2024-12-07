<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use App\Http\Controllers\EventController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/', function () {
    return view('home'); // Página inicial
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

// profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile'); // Mostrar perfil
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update'); // Actualizar perfil
});


// events


// user event
Route::get('/myevents', [EventController::class, 'myevents'])->name('myevents');


// Ruta para mostrar el formulario de creación
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');

// Ruta para almacenar el evento
Route::post('/events', [EventController::class, 'store'])->name('events.store');
// Ruta para mostrar el formulario de edición de un evento
Route::get('/events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');

// Ruta para eliminar un evento
Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
// Ruta para actualizar el evento
Route::put('/events/{id}', [EventController::class, 'update'])->name('events.update');

Route::middleware('auth')->group(function () {
    // Rutas para eventos
    Route::get('events', [EventController::class, 'index'])->name('events.index');  // Página de "Mis eventos"
    Route::get('events/{eventId}/edit', [EventController::class, 'edit'])->name('events.edit');
    Route::put('events/{eventId}', [EventController::class, 'update'])->name('events.update');
});


// eventos en home
Route::get('/', [EventController::class, 'index']); // Ruta para la página de inicio
