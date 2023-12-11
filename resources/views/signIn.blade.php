@extends('layouts.main')

@section('linkCSS')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('container')
    <div class="center">
        <h1>Login</h1>
        <form action="{{ route('logIn') }}" method="POST">
            @csrf
            <div class="txtField">
                <input type="text" name="username" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txtField">
                <input type="password" name="password" required>
                <span></span>
                <label>password</label>
            </div>
            <div class="pass">Forgot Password</div>
            <input type="submit" value="Login">
            <div class="signup_link">
                <a href="/signUp">Sign Up</a>
            </div>
        </form>
    </div>
@endsection
