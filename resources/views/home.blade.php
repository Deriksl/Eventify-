@extends('layouts.app')

@section('title', 'Eventify')

@section('content')

    <h1 class="page-title">Eventos</h1>
    <div class="events-grid">
        @foreach ($events as $event)
            <div class="event">
                <a href="{{ route('events.show', $event->id) }}" class="event-link">
                    <div class="event-logo">
                        @if ($event->logo)
                            <img src="{{ asset('storage/' . $event->logo) }}" alt="Event Logo">
                        @else
                            <img src="{{ asset('images/default-logo.png') }}" alt="Default Logo">
                        @endif
                    </div>
                    <div class="event-details">
                        <h3>{{ $event->name }}</h3>
                        <p>
                            Organizador: {{ $event->user->name }}<br>
                            Fecha: {{ \Carbon\Carbon::parse($event->date)->format('Y-m-d') }}
                        </p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>


    <!-- Paginación -->
    <div class="pagination">
        {{ $events->links() }}
    </div>
@endsection
