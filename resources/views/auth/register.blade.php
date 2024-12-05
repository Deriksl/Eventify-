<!-- register.blade.php -->
@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <h1>Register</h1>
    <form action="/">
        <input type="text" placeholder="Name" required>
        <input type="email" placeholder="Email" required>
        <input type="password" placeholder="Password" required>
        <button type="submit">Register</button>
    </form>
@endsection
