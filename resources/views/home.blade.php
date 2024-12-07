<!-- home.blade.php -->
@extends('layouts.app')

@section('title', 'Eventify')

@section('content')
    <h1>Eventos</h1>
    <div class="events-grid">
        @foreach ($events as $event)
            <div class="event">
                <!-- Mostrar el logo del evento si existe -->
                <img src="{{ asset('storage/' . $event->logo) }}" alt="Event Image">
                <h3>{{ $event->name }}</h3>
                <p>Organizador: {{ $event->user->name }}<br>Fecha: {{ \Carbon\Carbon::parse($event->date)->format('Y-m-d') }}</p>
            </div>
        @endforeach
    </div>

    <!-- Paginación -->
    <div class="pagination">
        {{ $events->links() }} <!-- Esto genera los enlaces de paginación automáticamente -->
    </div>
@endsection
