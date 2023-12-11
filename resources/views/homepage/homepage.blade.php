@extends('layouts.main')

@section('linkCSS')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@if (Auth::check())
    <style>
        body{
            min-height: 130vh;
        }
    </style>
@endif
@endsection

@section('container')
<div class="HeadQuote">
    <h1>BUILD AND LEVEL UP YOUR <br><span id="TopQuote"> CV AND PORTOFOLIO</span></h1>
    @if(Auth::check())
        @include('homepage.auth')
    @else
        @include('homepage.nonAuth')
    @endif

</div>
@endsection
