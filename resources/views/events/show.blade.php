@extends('layouts.app')

@section('title', 'Detalles del Evento')

@section('content')
    <div class="container">
        <!-- Título del evento -->
        <h1 class="event-title">{{ $event->name }}</h1>

        <!-- Detalles del evento -->
        <div class="event-details">
            <p><strong>Organizador:</strong> {{ $event->user->name }}</p>
            <p><strong>Descripción:</strong> {{ $event->description }}</p>
            <p><strong>Ubicación:</strong> {{ $event->location }}</p>
            <p><strong>Precio del Ticket:</strong> ${{ number_format($event->ticket_price, 2) }}</p>
            <p><strong>Fecha:</strong> {{ \Carbon\Carbon::parse($event->date)->format('Y-m-d H:i') }}</p>

            @if ($event->logo)
                <div class="event-logo">
                    <img src="{{ asset('storage/' . $event->logo) }}" alt="Event Logo" class="event-logo-img">
                </div>
            @endif
        </div>

        <!-- Formulario de compra de ticket al final -->
        <form action="{{ route('purchase.ticket', $event->id) }}" method="POST" class="ticket-form">
            @csrf
            <button type="submit" class="btn btn-primary">Comprar Ticket</button>
        </form>

        <!-- Botón para volver a la página principal -->
        <a href="{{ route('home') }}" class="btn btn-secondary">Volver</a>
    </div>
@endsection
