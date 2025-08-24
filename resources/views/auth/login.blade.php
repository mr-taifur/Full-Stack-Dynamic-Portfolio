@extends('layouts.index')

@section('content')
<div class="form-container">
    <form action="{{ route('login') }}" method="POST" novalidate>
        @csrf
        <h2>Login</h2>

        @if ($errors->any())
            <div class="error-message">
                {{ $errors->first() }}
            </div>
        @endif

        <input
            type="email"
            name="email"
            placeholder="Enter your email"
            value="{{ old('email') }}"
            required
            autofocus
        >

        <input
            type="password"
            name="password"
            placeholder="Enter your password"
            required
        >

        <button type="submit">Login</button>

        <p class="redirect-text">Don’t have an account? <a href="{{ route('register') }}">Register</a></p>
    </form>
</div>
@endsection
