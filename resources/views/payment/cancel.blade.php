@extends('layouts.app')

@section('title', 'Pago Cancelado')

@section('content')
    <div class="container">
        <h1>Pago Cancelado</h1>
        <p>Tu pago fue cancelado. Si tienes dudas, contáctanos.</p>
        <a href="{{ route('home') }}" class="btn btn-secondary">Volver al inicio</a>
    </div>
@endsection
