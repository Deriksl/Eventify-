@extends('layouts.app')

@section('content')
<div class="container">
    <div class="profile-header">
        <div class="profile-picture-container">
            <img src="{{ asset('assets/img/web2.png') }}" alt="Profile Picture" class="profile-picture">
        </div>
    </div>

    <div class="events-section">
        <div class="events-column">
            <h3>Eventos creados</h3>
            <div class="event">
                <span class="event-status">En curso</span>
                <span class="event-name">Evento 1</span>
                <a href="{{ url('/editmyevent') }}" class="edit-icon">
                    <img src="{{ asset('assets/img/web1.png') }}" alt="Edit">
                </a>
                <button class="delete-icon">
                    <img src="{{ asset('assets/img/web11.png') }}" alt="Delete">
                </button>
            </div>
            <div class="event">
                <span class="event-status">Ya acabó</span>
                <span class="event-name">Evento 2</span>
                <a href="{{ url('/editmyevent') }}" class="edit-icon">
                    <img src="{{ asset('assets/img/web1.png') }}" alt="Edit">
                </a>
                <button class="delete-icon">
                    <img src="{{ asset('assets/img/web11.png') }}" alt="Delete">
                </button>
            </div>
        </div>

        <div class="events-column">
            <h3>Eventos a los que irás o ya fuiste</h3>
            <div class="event">
                <span class="event-status">Acaba a las 17:00</span>
                <span class="event-name">Evento 23</span>
            </div>
            <div class="event">
                <span class="event-status">Empieza en 5h</span>
                <span class="event-name">Evento 3</span>
            </div>
            <div class="event">
                <span class="event-status">En curso</span>
                <span class="event-name">Evento 9</span>
            </div>
            <div class="event">
                <span class="event-status">Comienza el 24/12/2024 18:00</span>
                <span class="event-name">Evento 79</span>
            </div>
        </div>
    </div>
</div>
@endsection
