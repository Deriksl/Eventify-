@extends('layouts.app')

@section('title', 'Detalles del Evento')

@section('content')
    <div class="container">
        <form action="{{ route('purchase.ticket', $event->id) }}" method="POST">
            @csrf
            <button type="submit">Comprar Ticket</button>
        </form>

        <h1>{{ $event->name }}</h1>
        <div class="event-details">
            <p><strong>Organizador:</strong> {{ $event->user->name }}</p>
            <p><strong>Descripción:</strong> {{ $event->description }}</p>
            <p><strong>Ubicación:</strong> {{ $event->location }}</p>
            <p><strong>Precio del Ticket:</strong> ${{ number_format($event->ticket_price, 2) }}</p>
            <p><strong>Fecha:</strong> {{ \Carbon\Carbon::parse($event->date)->format('Y-m-d H:i') }}</p>
            @if ($event->logo)
                <div class="event-logo">
                    <img src="{{ asset('storage/' . $event->logo) }}" alt="Event Logo" style="max-height: 200px;">
                </div>
            @endif
        </div>
        <a href="{{ route('home') }}" class="btn btn-secondary">Volver</a>
    </div>
@endsection
