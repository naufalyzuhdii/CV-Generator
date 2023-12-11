@extends('layouts.main')

@section('linkCSS')

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('container')

    <h1 id="about-title">About Us</h1>
    <div class="about-content">
        <div class="dev-detail1">
            <h3>2301859335 | Adrian Rianto</h3>
            <p>adrian.rianto@binus.ac.id</p>
        </div>
        <div class="dev-detail2">
            <h3>2301875830 | Stanley Feleri</h3>
            <p>stanley.feleri@binus.ac.id</p>
        </div>
        <div class="dev-detail3">
            <h3>2301944481 | Naufaly Zuhdi</h3>
            <p>naufaly.indriandi@binus.ac.id</p>
        </div>
    </div>

@endsection
