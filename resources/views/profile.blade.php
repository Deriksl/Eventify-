@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Foto de perfil -->
        <div class="profile-header">
            <div class="profile-picture-container">
                <img src="{{ asset('assets/img/web2.png') }}" alt="Profile Picture" class="profile-picture">
                <button class="edit-button">
                    <img src="{{ asset('assets/img/web1.png') }}" alt="Edit" class="edit-icon">
                </button>
            </div>
        </div>

        <!-- Información del perfil -->
        <div class="profile-info">
            <div class="form-group">
                <input type="text" id="first-name" placeholder="Derik" readonly>
                <button class="edit-icon" onclick="toggleEdit('first-name')">
                    <img src="{{ asset('assets/img/web1.png') }}" alt="Edit">
                </button>
            </div>
            <div class="form-group">
                <input type="text" id="last-name" placeholder="Salazar Lopez" readonly>
                <button class="edit-icon" onclick="toggleEdit('last-name')">
                    <img src="{{ asset('assets/img/web1.png') }}" alt="Edit">
                </button>
            </div>
            <div class="form-group">
                <input type="text" id="email" placeholder="email@example.com" readonly>
                <button class="edit-icon" onclick="toggleEdit('email')">
                    <img src="{{ asset('assets/img/web1.png') }}" alt="Edit">
                </button>
            </div>
            <div class="form-group">
                <input type="text" id="phone" placeholder="123-456-7890" readonly>
                <button class="edit-icon" onclick="toggleEdit('phone')">
                    <img src="{{ asset('assets/img/web1.png') }}" alt="Edit">
                </button>
            </div>
            <div class="form-group">
                <input type="text" id="username" placeholder="Username" readonly>
                <button class="edit-icon" onclick="toggleEdit('username')">
                    <img src="{{ asset('assets/img/web1.png') }}" alt="Edit">
                </button>
            </div>
            <div class="form-group">
                <input type="password" id="password" placeholder="Password" readonly>
                <button class="edit-icon" onclick="toggleEdit('password')">
                    <img src="{{ asset('assets/img/web1.png') }}" alt="Edit">
                </button>
            </div>
        </div>
    </div>
@endsection
