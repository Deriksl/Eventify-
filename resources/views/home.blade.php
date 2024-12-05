<!-- home.blade.php -->
@extends('layouts.app')

@section('title', 'Eventify')

@section('content')
    <h1>Eventos</h1>
    <div class="events-grid">
        @for ($i = 1; $i <= 8; $i++)
            <div class="event">
                <img src="https://via.placeholder.com/150" alt="Event Image">
                <h3>Evento {{ $i }}</h3>
                <p>Organizador: Usuario {{ $i }}<br>Fecha: {{ now()->addDays($i)->format('Y-m-d') }}</p>
            </div>
        @endfor
    </div>
    <div class="pagination">
        @for ($i = 1; $i <= 10; $i++)
            <a href="#"> {{ $i }} </a>
        @endfor
        <a href="#">Siguiente</a>
    </div>
@endsection
