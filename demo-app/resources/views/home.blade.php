@extends('layouts.body')

@section('title', 'Register Page')

@section('main')

<div class="container text-white mt-5">
    <h1>Welcome to our website</h1>
    @if (Auth::check())
        <div class="mb-3">
            <p class="text-bg-dark p-2 rounded-1 d-inline">Status: <span class="text-success">Logged in</span></p>
        </div>
        <a href="{{ route('logout') }}" class="btn btn-primary">Logout</a>
    @else
        <div class="mb-3">
            <p class="text-bg-dark p-2 rounded-1 d-inline">Status: <span class="text-danger">Not logged in</span></p>
        </div>
        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
        <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
    @endif
</div>

@endsection
