@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="profile-header">
            <div class="profile-picture-container">
            </div>
        </div>

        <div class="events-section">
            <div class="events-column">
                <h3>Eventos creados</h3>
                <button onclick="window.location.href='{{ route('events.create') }}'" class="btn btn-primary mb-3">Crear nuevo evento</button>

                @forelse($createdEvents as $event)
                    <div class="event border p-3 mb-3">
                        <!-- Mostrar todos los datos del evento -->
                        <p><strong>Estado:</strong> {{ $event->status }}</p>
                        <p><strong>Nombre:</strong> {{ $event->name }}</p>
                        <p><strong>Descripción:</strong> {{ $event->description }}</p>
                        <p><strong>Ubicación:</strong> {{ $event->location }}</p>
                        <p><strong>Fecha:</strong> {{ $event->date }}</p>
                        <p><strong>Precio del Ticket:</strong> ${{ number_format($event->ticket_price, 2) }}</p>


                        <!-- Mostrar imagen/logo si existe -->
                        @if($event->logo)
                            <div class="mb-3">
                                <strong>Logo:</strong>
                                <img src="{{ asset('storage/' . $event->logo) }}" alt="Logo del evento">
                            </div>

                            <div class="form-group">
                                <label for="name">Nombre:</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                        @endif

                        <!-- Botón para editar el evento -->
                        <button class="btn btn-warning edit-button" onclick="showEditForm({{ $event->id }})">Editar</button>

                        <!-- Formulario de edición (oculto por defecto) -->
                        <div id="edit-form-{{ $event->id }}" class="edit-form mt-3" style="display: none;">
                            <form action="{{ route('events.update', $event->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="name-{{ $event->id }}">Nombre:</label>
                                    <input type="text" id="name-{{ $event->id }}" name="name" value="{{ $event->name }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="description-{{ $event->id }}">Descripción:</label>
                                    <textarea id="description-{{ $event->id }}" name="description" class="form-control">{{ $event->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="location-{{ $event->id }}">Ubicación:</label>
                                    <input type="text" id="location-{{ $event->id }}" name="location" value="{{ $event->location }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="date-{{ $event->id }}">Fecha:</label>
                                    <input type="datetime-local" id="date-{{ $event->id }}" name="date" value="{{ date('Y-m-d\TH:i', strtotime($event->date)) }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="status-{{ $event->id }}">Estado:</label>
                                    <input type="text" id="status-{{ $event->id }}" name="status" value="{{ $event->status }}" class="form-control">
                                </div>

                                <button type="submit" class="btn btn-success">Guardar cambios</button>
                                <button type="button" class="btn btn-secondary" onclick="cancelEdit({{ $event->id }})">Cancelar</button>
                            </form>
                        </div>

                        <!-- Botón para eliminar -->
                        <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="mt-3">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                @empty
                    <p>No has creado ningún evento.</p>
                @endforelse
            </div>

            <div class="events-column">
                <h3>Eventos a los que irás o ya fuiste</h3>
                @forelse($attendingEvents as $event)
                    <div class="event border p-3 mb-3">
                        <p><strong>Estado:</strong> {{ $event->status }}</p>
                        <p><strong>Nombre:</strong> {{ $event->name }}</p>
                        <p><strong>Descripción:</strong> {{ $event->description }}</p>
                        <p><strong>Ubicación:</strong> {{ $event->location }}</p>
                        <p><strong>Fecha:</strong> {{ $event->date }}</p>
                        <p><strong>Precio del Ticket:</strong> ${{ number_format($event->ticket_price, 2) }}</p>

                        <!-- Mostrar imagen/logo si existe -->
                        @if($event->logo)
                            <div class="mb-3">
                                <strong>Logo:</strong>
                                <img src="{{ asset('storage/' . $event->logo) }}" alt="Logo del evento">
                            </div>
                        @endif
                    </div>
                @empty
                    <p>No estás inscrito en ningún evento.</p>
                @endforelse
            </div>

        </div>
    </div>

    <script>
        // Función para mostrar el formulario de edición
        function showEditForm(eventId) {
            // Ocultamos todos los formularios de edición
            let forms = document.querySelectorAll('.edit-form');
            forms.forEach(function (form) {
                form.style.display = 'none';
            });

            // Mostramos el formulario del evento seleccionado
            document.getElementById('edit-form-' + eventId).style.display = 'block';
        }

        // Función para cancelar la edición
        function cancelEdit(eventId) {
            document.getElementById('edit-form-' + eventId).style.display = 'none';
        }
    </script>
@endsection
