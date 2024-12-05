<!-- register.blade.php -->
@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <h1>Register</h1>
    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name ="name" placeholder="Name" required>
        <input type="text" name="lastname" placeholder="Last Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone_number" placeholder="Phone Number" required>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
        <input type="file" name="profile_picture" accept="image/*">

        <button type="submit">Register</button>
    </form>

@endsection

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

