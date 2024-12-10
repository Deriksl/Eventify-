@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <div class="text-center mb-4">
            <h1 class="text-primary">Gestión de Asistentes para el Evento <span class="text-success">{{ $event->name }}</span></h1>
        </div>

        <h3 class="text-secondary mb-3">Lista de Asistentes</h3>
        <table class="table table-bordered table-striped shadow-sm">
            <thead class="bg-purple text-white">
            <tr>
                <th>Nombre</th>
                <th>Correo Electrónico</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($attendees as $attendee)
                <tr>
                    <td>{{ $attendee->user->name }}</td>
                    <td>{{ $attendee->user->email }}</td>
                    <td class="text-center">{{ $attendee->status }}</td>
                    <td class="text-center">
                        <form action="{{ route('attendees.destroy', $attendee->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm btn-hover">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
