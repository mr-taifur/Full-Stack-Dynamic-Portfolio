@extends('layouts.index')

@section('content')
<div class="form-container">
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <h2>Register</h2>

        @if ($errors->any())
            <div class="error-message">
                {{ $errors->first() }}
            </div>
        @endif

        <input type="text" name="name" placeholder="Enter Name" value="{{ old('name') }}" required>
        <input type="email" name="email" placeholder="Enter Email" value="{{ old('email') }}" required>
        <input type="password" name="password" placeholder="Enter Password" required>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required>

        <button type="submit">Register</button>

        <p class="redirect-text">Already have an account? <a href="{{ route('login') }}">Login</a></p>
    </form>
</div>
@endsection
