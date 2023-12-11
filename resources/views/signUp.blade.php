@extends('layouts.main')

@section('linkCSS')

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('container')
    <div class="centerSignUp">
        <h1>Sign Up</h1>
        <form action="{{ route('createUser') }}" method="POST">
            @csrf
            <div class="txtField">
                <input type="text"  name="full_name" required>
                <span></span>
                <label>Full Name</label>
            </div>

            <div class="txtField">
                <input type="email" name="email" required>
                <span></span>
                <label>Email</label>
            </div>

            <div class="txtField">
                <input type="text" name="username" required>
                <span></span>
                <label>Username</label>
            </div>

            <label for="Gender"> Gender <br> <br> </label>


            <div class="gender">

                <input type="radio" name="gender" id="Male" value="Male"> <label for="Male">Male</label>
                <input type="radio" name="gender" id="Female" value="Female"> <label for="Female">Female</label>
                <span></span>

            </div>

            <div class="txtField">
                <label for="DOB"></label>
                <input type="date" id="DOB" name="DOB">
                <span></span>
                <label>DOB</label>
            </div>

            <div class="txtField">
                <input type="text"  name="phone" required>
                <span></span>
                <label>Phone</label>
            </div>

            <div class="txtField">
                <input type="text"  name="address" required>
                <span></span>
                <label>Address</label>
            </div>


            <div class="txtField">
                <input type="text"  name="linkedIn" required>
                <span></span>
                <label>LinkedIn</label>
            </div>

            <div class="txtField">
                <input type="Password"  name="password" required>
                <span></span>
                <label>Password</label>
            </div>

            <input type="submit" value="Sign Up">
            <div class="signup_link">
                <a href="/signIn">Login</a>
            </div>
        </form>
    </div>
@endsection
