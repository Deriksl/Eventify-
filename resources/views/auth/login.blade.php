<!-- login.blade.php -->
@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <h1>Login</h1>
    <form action="/">
        <input type="text" placeholder="Email" required>
        <input type="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
@endsection<!-- login.blade.php -->
