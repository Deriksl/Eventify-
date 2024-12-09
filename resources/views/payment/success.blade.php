@extends('layouts.app')

@section('title', 'Pago Exitoso')

@section('content')
    <div class="container">
        <h1>¡Gracias por tu compra!</h1>
        <p>Tu pago se realizó con éxito. ¡Nos vemos en el evento!</p>
        <a href="{{ route('home') }}" class="btn btn-primary">Volver al inicio</a>
    </div>
@endsection
